@extends('layouts.layout')
@section('title', 'Add Course')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('courses.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Courses</span>
        </a>
    </div>

    <x-card title="Add New Course">
        <form action="{{ route('courses.store') }}" method="POST" class="module-form">
            @csrf

            <x-form-input name="title" label="Course Title" placeholder="e.g. Introduction to Programming" required />
            <x-form-input name="course_code" label="Course Code" placeholder="e.g. CS101" required />
            <x-form-input name="credit_hours" label="Credit Hours" type="number" placeholder="e.g. 3" required />
            <x-form-select name="department_id" label="Department" :options="$departmentOptions" placeholder="-- No Department --" />

            <x-button type="submit" variant="primary">Create Course</x-button>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/courses-create.css') }}">
@endpush
