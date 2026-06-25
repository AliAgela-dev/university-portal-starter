@props([
    'name',
    'label',
    'options' => [],
    'selected' => null,
    'required' => false,
    'placeholder' => '-- Select --',
])

<div class="form-group">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if($required)
            <span class="required-asterisk">*</span>
        @endif
    </label>
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
        <option value="">{{ $placeholder }}</option>
        @foreach($options as $value => $label)
            <option value="{{ $value }}" {{ (string) old($name, $selected) === (string) $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
</div>
