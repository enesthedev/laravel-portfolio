<x-container styles="p-5 md:p-10 md:pb-4">
    @if(! (empty($title) && empty($description)))
        <div class="flex flex-col gap-y-5 md:gap-y-0 md:flex-row">
            @if(! empty($avatar))
                <div class="flex items-center justify-center md:w-1/3">
                    <img src="{{ asset($avatar) }}" class="rounded-full h-[200px]"/>
                </div>
            @endif
            <div class="flex flex-col justify-center items-center md:w-2/3 md:items-start">
                <h1 class="font-inter font-bold text-2xl">{{ __($title) }}</h1>
                <p>{{ __($description) }}</p>
            </div>
        </div>
    @endif

    @if($routes)
        <nav class="mt-5 md:mt-3">
            <ul class="text-center w-full md:text-right">
                @foreach($routes as $route)
                    <li class="inline-block">
                        <x-link :to="$route['path']" styles="ml-2">{{ __($route["title"]) }}</x-link>
                    </li>
                @endforeach
            </ul>
        </nav>
    @endif
</x-container>
