<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md bg-white p-6 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-6">Weather App</h1>
        <form method="post" action="/weather">
            @csrf
            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Enter City:</label>
            <input type="text" id="city" name="city" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Get Weather</button>
        </form>
    </div>
</body>
</html>
