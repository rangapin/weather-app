<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Display the form to input the city.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle the form submission and fetch weather data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function getWeather(Request $request)
    {
        // Validate the form data
        $request->validate([
            'city' => 'required|string|max:255',
        ]);

        // Retrieve the city from the form submission
        $city = $request->input('city');

        // Replace 'YOUR_API_KEY' with your actual API key
        $apiKey = 'e07b3a2c78c0f99da88f41305bccc3e9';

        // Make a request to the OpenWeatherMap API
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey");

        // Parse the JSON response
        $weatherData = $response->json();

        // Check if the API request was successful and data is available
        if (isset($weatherData['main'])) {
            return view('weather')->with('weatherData', $weatherData);
        } else {
            // Handle the case where weather data is not available
            return view('weather')->with('error', 'Weather data not available for the specified city.');
        }
    }
}

