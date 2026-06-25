@extends('layouts.layout')
@section('title', 'Add Enrollment')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('enrollments.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Enrollments</span>
        </a>
    </div>

    <x-card title="Add New Enrollment">
        <form action="{{ route('enrollments.store') }}" method="POST" class="module-form">
            @csrf

            <x-form-select name="student_id" label="Student" :options="$studentOptions" placeholder="-- Select Student --" required />
            <x-form-select name="course_id" label="Course" :options="$courseOptions" placeholder="-- Select Course --" required />
            <x-form-input name="grade" label="Grade" placeholder="e.g. A, B+, 90 (optional)" />

            <x-button type="submit" variant="primary">Create Enrollment</x-button>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/enrollments-create.css') }}">
@endpush
