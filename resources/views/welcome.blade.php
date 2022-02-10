<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FoxCar</title>
    <link rel="shortcut icon" href="/images/car-flat.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">


    <!-- Styles -->

</head>
<style>
    .background {
        background-color: rgb(158, 149, 151);
    }

</style>

<body class="background">
    <x-navbar />
</body>

</html>
<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
