<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Register</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-900 text-slate-50">
<livewire:register />
@livewireScripts
</body>
</html>
