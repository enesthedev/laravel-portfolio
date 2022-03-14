<a {{ $attributes->merge(['class' => ($styles . ' cursor-pointer font-semibold hover:underline hover:text-blue-900') ]) }} @if(!empty($to)) href="{{ $to }}" @endif>{{ $slot }}</a>
