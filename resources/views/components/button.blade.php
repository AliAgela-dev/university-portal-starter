@props([
    'type' => 'regular',
    'href' => null,
    'method' => null,
])

{{-- create button --}}
@if($type === 'create')
    <a href="{{ $href }}" class="btn custome-btn btn-create">
        <i class="fa-solid fa-plus"></i> Create new {{ $slot }}
    </a>

{{-- edit button --}}
@elseif($type === 'edit')
    <a href="{{ $href }}" class="btn custome-btn btn-edit">
        <i class="fa-solid fa-pen-to-square"></i> Edit
    </a>

{{-- delete button --}}
@elseif($type === 'delete')
    <form action="{{ $href }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn custome-btn btn-delete">
            <i class="fa-solid fa-trash-can"></i> Delete
        </button>
    </form>

{{-- submit button (used inside forms to actually save/send data) --}}
@elseif($type === 'submit')
    <button type="submit" class="btn custome-btn btn-regular">
        {{ $slot }}
    </button>

{{-- back button --}}
@elseif($type === 'back')
    <a href="{{ $href }}" class="btn custome-btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

{{-- regular button (default, plain button, no submit behavior) --}}
@else
    <button type="button" class="btn custome-btn btn-regular">
        {{ $slot }}
    </button>
@endif