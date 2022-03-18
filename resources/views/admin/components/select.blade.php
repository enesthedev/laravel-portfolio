 <div>
     <label for="{{ $selectDomId }}" {{ $attributes->merge(['class' => ($labelStyles . ' ' . $variants[$variant] . ' block mb-2 text-sm font-medium') ]) }}>{{ __($languagePrefix . $selectLabelText) }}</label>
     <select id="{{ $selectDomId }}" name="{{ $selectFormName }}" {{ $attributes->merge(['class' => ($selectStyles . ' ' . $variants[$variant] . ' border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500') ]) }}>
         @foreach($options as $optionKey => $optionValue)
             @php($optionValue = is_array($optionValue) ? $optionKey : $optionValue)
             <option {{ $selectedOption === $optionValue ? 'selected' : '' }}>{{ __($languagePrefix . $optionValue) }}</option>
         @endforeach
     </select>
</div>
