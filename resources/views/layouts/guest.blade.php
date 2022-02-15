<!DOCTYPE html>
<html data-theme="{{ config('app.theme') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('/icon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles()
</head>

<body class="font-display antialiased text-base-content">
    <x-alerts />

    {{ $slot }}

    @livewireScripts()
</body>

</html>