<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="{{ asset("styles/tailwind.css") }}" rel="stylesheet">

    <title>Document</title>
</head>
<body class="antialiased bg-white text-stone-800 dark:bg-stone-900 dark:text-stone-100">

    <div class="flex flex-col bg-white bg-opacity-20 max-w-screen-sm w-screen h-screen mx-auto pt-[5rem]">
        <x-header :title="empty($applicationTitle) ? __('Application Title') : $applicationTitle"
                  :routes="[
                    ['Home', route('welcome')],
                    ['References', ''],
                    ['Blog Posts', '']
                  ]"
        ></x-header>
    </div>
</body>
</html>
