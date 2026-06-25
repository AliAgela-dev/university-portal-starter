@extends('layouts.layout')
@section('title', 'Edit Student')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('students.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Students</span>
        </a>
    </div>

    <x-card title="Edit Student">
        <form action="{{ route('students.update', $student->getId()) }}" method="POST" class="module-form">
            @csrf
            @method('PUT')

            <x-form-input name="student_number" label="Student Number" :value="$student->getStudentNumber()" placeholder="e.g. STU001" required />
            <x-form-input name="name" label="Full Name" :value="$student->getName()" placeholder="e.g. Jane Smith" required />
            <x-form-input name="email" label="Email Address" type="email" :value="$student->getEmail()" placeholder="e.g. jane@university.edu" required />
            <x-form-select name="department_id" label="Department" :options="$departmentOptions" :selected="$student->getDepartmentId()" placeholder="-- No Department --" />

            <div class="form-divider"></div>
            <div class="form-actions">
                <x-button :href="route('students.index')" variant="secondary">Cancel</x-button>
                <x-button type="submit" variant="primary">Save Changes</x-button>
            </div>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/students-edit.css') }}">
@endpush
