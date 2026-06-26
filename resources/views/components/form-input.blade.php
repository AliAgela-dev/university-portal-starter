@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'value' => null,
])

<div style="margin-bottom: 15px;">
    <label for="{{ $name }}" style="display: block; margin-bottom: 5px; color: #1a1a1a; font-weight: bold;">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; box-sizing: border-box; transition: border-color 0.2s, box-shadow 0.2s;"
        onfocus="this.style.borderColor='#F2B33D'; this.style.boxShadow='0 0 0 3px rgba(242, 179, 61, 0.15)';"
        onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';"
    >
</div>