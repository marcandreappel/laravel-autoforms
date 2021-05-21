<div>
    {{ $label }}
    <select name="" @if($isMultiple) multiple @endif>
        @foreach($options as $option)
            <option value=""></option>
        @endforeach
    </select>
</div>
