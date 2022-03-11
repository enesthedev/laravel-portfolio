<div class="flex flex-col gap-y-6">
    @if(! empty($title))
        <div>
            <h1 class="font-black font-inter text-4xl">{{ $title }}</h1>
            @if(! empty($description))
                <p>{{ __($description) }}</p>
            @endif
        </div>
    @endif

    @if($routes)
        <nav class="flex gap-x-3 flex-col sm:ml-auto sm:flex-row">
            @foreach($routes as $route)
                <x-link :to="$route[1]" styles="text-sm">{{ __($route[0]) }}</x-link>
            @endforeach
        </nav>
    @endif
</div>
