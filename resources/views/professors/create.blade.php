@extends('layouts.layout')
@section('title', 'Add Professor')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('professors.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Professors</span>
        </a>
    </div>

    <x-card title="Add New Professor">
        <form action="{{ route('professors.store') }}" method="POST" class="module-form">
            @csrf

            <x-form-input name="name" label="Full Name" placeholder="e.g. Dr. John Smith" required />
            <x-form-input name="email" label="Email Address" type="email" placeholder="e.g. j.smith@university.edu" required />
            <x-form-select name="department_id" label="Department" :options="$departmentOptions" placeholder="-- No Department --" />

            <x-button type="submit" variant="primary">Create Professor</x-button>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/professors-create.css') }}">
@endpush
