<div class="flex flex-col gap-y-8">
    @if($title)
        <h1 class="font-black font-inter text-4xl">{{ $title }}</h1>
    @endif

    @if($routes)
        <nav class="flex gap-x-3 flex-col sm:ml-auto sm:flex-row">
            @foreach($routes as $route)
                <x-link :to="$route[1]" styles="text-sm">{{ __($route[0]) }}</x-link>
            @endforeach
        </nav>
    @endif
</div>
