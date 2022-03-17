<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="{{ asset("styles/tailwind.css") }}" rel="stylesheet">

    {{ $styles }}

    <title>Document</title>
</head>
<body class="antialiased flex flex-col items-center justify-center bg-white text-stone-800 dark:bg-stone-900 dark:text-stone-100">
    <x-web.header title="Merhaba, Ben Enes"
              :description="$description"
              avatar="/assets/images/avatar.jpg"
              :routes="[
                ['title' => 'Giriş', 'path' => ''],
                ['title' => 'Yazılarım', 'path' => ''],
                ['title' => 'İletişim', 'path' => ''],
              ]"
    />
    {{ $slot }}

    <script src="{{ asset("scripts/script.js") }}" type="text/javascript"></script>
    {{ $scripts }}
</body>
</html>
