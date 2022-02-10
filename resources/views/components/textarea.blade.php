@props(['disabled' => false, 'rows'=>'4', 'cols'=>'50', 'value'=>''])

<textarea {{ $disabled ? 'disabled' : '' }} rows="{{ $rows }}" cols="{{ $cols }}" {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>{{ $value }}</textarea>
