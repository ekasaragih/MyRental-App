<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>MyRental-App</title>

    <style>
        .pixel-font {
            font-family: 'Press Start 2P', cursive;
        }
    </style>

    @vite('resources/css/app.css')
    @yield('head')
</head>

<body class="bg-gray-100">

    @yield('content')

</body>

</html>