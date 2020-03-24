
<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <textarea name="{{ $field['name'] }}" 
                id="{{ $field['name'] }}" 
                cols="30" 
                rows="7" 
                class="form-control {{ array_get( $field, 'class') }}">{{ old($field['name'], \setting($field['name'])) }}</textarea>

    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>