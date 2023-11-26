<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
</head>
<body>
    <h1>Weather Information</h1>

    @if(isset($weatherData['main']))
        <p>Temperature: {{ $weatherData['main']['temp'] }} °C</p>
        <p>Humidity: {{ $weatherData['main']['humidity'] }}%</p>
        <!-- Add more weather details as needed -->
    @else
        <p>Weather data not available for the specified city.</p>
    @endif
</body>
</html>
