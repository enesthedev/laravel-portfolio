@if(! empty($lines))
    <ol class="flex flex-col gap-y-7 pt-2 sm:pt-0 sm:flex-row sm:justify-end sm:items-center sm:w-full sm:overflow-x-auto sm:no-scrollbar">
        @foreach($lines as $line)
            <li class="relative sm:mb-0 sm:flex-shrink-0 sm:w-1/3">
                <div class="hidden sm:flex sm:items-center">
                    <div class="flex z-10 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white shrink-0 sm:ring-8">
                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                </div>
                <div class="text-center sm:text-left sm:mt-3 sm:pr-8">
                    <h3 class="text-lg font-semibold text-gray-900">{{ __($line['title']) }}</h3>
                    <small class="block text-sm text-black text-opacity-70 tracking-wider font-inter">{{ __($line['description']) }}</small>
                    <time class="block text-sm font-semibold leading-none text-gray-400">{{ __($line['date']) }}</time>
                </div>
            </li>
        @endforeach
    </ol>
@endif
