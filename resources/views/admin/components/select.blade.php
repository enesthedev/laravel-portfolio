 <div>
     <label for="{{ $selectDomId }}" {{ $attributes->merge(['class' => ($labelStyles . ' ' . $variants[$variant] . ' block mb-2 text-sm font-medium') ]) }}>{{ __($selectLabelText) }}</label>
     <select id="{{ $selectDomId }}" name="{{ $selectFormName }}" {{ $attributes->merge(['class' => ($selectStyles . ' ' . $variants[$variant] . ' border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500') ]) }}>
         @foreach($options as $optionKey => $optionValue)
             @php($optionValue = is_array($optionValue) ? __($optionKey) : __($optionValue))
             <option {{ $selectedOption === $optionValue ? 'selected' : '' }}>{{ $optionValue }}</option>
         @endforeach
     </select>
</div>
