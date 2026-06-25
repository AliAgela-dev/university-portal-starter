@extends('layouts.layout')
@section('title', 'Edit Enrollment')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('enrollments.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Enrollments</span>
        </a>
    </div>

    <x-card title="Edit Enrollment">
        <form action="{{ route('enrollments.update', $enrollment->getId()) }}" method="POST" class="module-form">
            @csrf
            @method('PUT')

            <x-form-select name="student_id" label="Student" :options="$studentOptions" :selected="$enrollment->getStudentId()" placeholder="-- Select Student --" required />
            <x-form-select name="course_id" label="Course" :options="$courseOptions" :selected="$enrollment->getCourseId()" placeholder="-- Select Course --" required />
            <x-form-input name="grade" label="Grade" :value="$enrollment->getGrade()" placeholder="e.g. A, B+, 90 (optional)" />

            <div class="form-divider"></div>
            <div class="form-actions">
                <x-button :href="route('enrollments.index')" variant="secondary">Cancel</x-button>
                <x-button type="submit" variant="primary">Save Changes</x-button>
            </div>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/enrollments-edit.css') }}">
@endpush
