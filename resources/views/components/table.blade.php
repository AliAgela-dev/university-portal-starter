@props([
    'rtl' => false,
])

<div class="table-wrapper" style="overflow-x: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(11, 45, 35, 0.08); margin-top: 15px; border: 1px solid #e5e7eb;">
    <table style="
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        text-align: {{ $rtl ? 'right' : 'left' }};
        direction: {{ $rtl ? 'rtl' : 'ltr' }};
        font-size: 14px;
    ">
        <thead>
            <tr style="background: linear-gradient(135deg, #1a1500, #2e2400); color: #ffffff;">
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>