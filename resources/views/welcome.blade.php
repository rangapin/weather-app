<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
</head>
<body>
    <form method="post" action="/weather">
        @csrf
        <label for="city">Enter City:</label>
        <input type="text" id="city" name="city" required>
        <button type="submit">Get Weather</button>
    </form>
</body>
</html>
