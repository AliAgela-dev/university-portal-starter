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
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

{{-- delete button --}}
@elseif($type === 'delete')
    <form action="{{ $href }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn custome-btn btn-delete"
            onclick="window._deleteForm=this.closest('form'); document.getElementById('deleteModal').style.display='flex'">
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </form>

    @once
        <div id="deleteModal">
            <div class="modal-box">
                <div class="modal-icon">
                    <i class="fa-solid fa-trash-can"></i>
                </div>
                <p class="modal-title">Confirm deletion</p>
                <p class="modal-subtitle">are you sure you want to delete this item ?<br>This action cannot be reversed.</p>
                <div class="modal-actions">
                    <button onclick="document.getElementById('deleteModal').style.display='none'"
                        class="btn custome-btn btn-back">
                        <i class="fa-solid fa-xmark"></i> Cancel
                    </button>
                    <button onclick="window._deleteForm.submit()"
                        class="btn custome-btn btn-delete">
                        <i class="fa-solid fa-trash-can"></i> Delete
                    </button>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('deleteModal').addEventListener('click', function(e) {
                if (e.target === this) this.style.display = 'none';
            });
        </script>
    @endonce

{{-- submit button --}}
@elseif($type === 'submit')
    <button type="submit" class="btn custome-btn btn-regular">
        {{ $slot }}
    </button>

{{-- back button --}}
@elseif($type === 'back')
    <a href="{{ $href }}" class="btn custome-btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

{{-- regular button --}}
@else
    <button type="button" class="btn custome-btn btn-regular">
        {{ $slot }}
    </button>
@endif