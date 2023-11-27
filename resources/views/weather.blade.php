<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md bg-white p-6 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-blue-500">Weather Information</h1>

        @if(isset($weatherData['main']))
            <p class="text-gray-700 text-lg mb-4">Temperature: {{ $weatherData['main']['temp'] }} °C</p>
            <p class="text-gray-700 text-lg mb-6">Humidity: {{ $weatherData['main']['humidity'] }}%</p>
            <!-- Add more weather details as needed -->
        @else
            <p class="text-red-500 text-lg mb-6">{{ $error ?? 'Weather data not available for the specified city.' }}</p>
        @endif

        <a href="{{ url()->previous() }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Back</a>
    </div>
</body>
</html>
