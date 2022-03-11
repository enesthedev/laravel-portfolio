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

    <title>Document</title>
</head>
<body class="antialiased bg-white text-stone-800 dark:bg-stone-900 dark:text-stone-100">

    <div class="flex flex-col max-w-screen-sm w-screen h-screen mx-auto pt-[5rem]">
        <x-header :title="empty($applicationTitle) ? __('Application Title') : $applicationTitle"
                  :description="! empty($description) ? $description : (empty($applicationDescription) ? __('Application Description') : $applicationDescription)"
                  :routes="$isAdmin ? [
                    [__('Home'), route('welcome')]
                  ] : [
                    [__('Home'), route('welcome')],
                    [__('References'), ''],
                    [__('Blog Posts'), '']
                  ]"
        ></x-header>
        {{ $slot }}
    </div>
</body>
</html>
