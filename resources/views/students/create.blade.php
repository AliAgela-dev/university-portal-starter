@extends('layouts.layout')
@section('title', 'Add Student')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('students.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Students</span>
        </a>
    </div>

    <x-card title="Add New Student">
        <form action="{{ route('students.store') }}" method="POST" class="module-form">
            @csrf

            <x-form-input name="student_number" label="Student Number" placeholder="e.g. STU001" required />
            <x-form-input name="name" label="Full Name" placeholder="e.g. Jane Smith" required />
            <x-form-input name="email" label="Email Address" type="email" placeholder="e.g. jane@university.edu" required />
            <x-form-select name="department_id" label="Department" :options="$departmentOptions" placeholder="-- No Department --" />

            <x-button type="submit" variant="primary">Create Student</x-button>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/students-create.css') }}">
@endpush
