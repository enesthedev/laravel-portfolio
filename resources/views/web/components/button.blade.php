<button {{
    $attributes->merge(
        ['type' => $type, 'class' => $styles . ' cursor-pointer font-semibold hover:underline hover:text-blue-900']
    )
}}>{{ $slot }}</button>
