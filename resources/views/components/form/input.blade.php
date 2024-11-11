@props([
    'type' => 'text',
    'id' => '',
    'name' => '',
    'value' => '',
    'labelClass' => '',
    'divClass' => '',
    'class',
])

<div class="mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $divClass }}">
    @if ($attributes['label'])
        <label for="{{ $id }}" class="mb-2 {{ $labelClass }}">
            {{ $attributes['label'] }}
            {{-- add asterisk for required field --}}
            @if (isset($attributes['required']))
                <span class='text-danger'>*</span>
            @endif
        </label>
    @endif
    <input type="{{ $type }}" id="{{ $id }}" class="form-control {{ $class ?? '' }}"
        name="{{ $name }}" value="{{ old($name, $value) }}" {{ $attributes }} />

    @if ($errors->has($name))
        <label class="error mt-2 text-danger">{{ $errors->first($name) }}</label>
    @endif
</div>
