@props([
    'rtl' => false,
])

<div class="table-wrapper">
    <table class="data-table" @if($rtl) dir="rtl" @endif>
        <thead>
            <tr>
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>