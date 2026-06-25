@extends('layouts.layout')
@section('title', 'Edit Professor')
@section('content')

<div class="module-form-page">
    <div class="module-return">
        <a href="{{ route('professors.index') }}">
            <i data-lucide="arrow-left"></i>
            <span>Return to Professors</span>
        </a>
    </div>

    <x-card title="Edit Professor">
        <form action="{{ route('professors.update', $professor->getId()) }}" method="POST" class="module-form">
            @csrf
            @method('PUT')

            <x-form-input name="name" label="Full Name" :value="$professor->getName()" placeholder="e.g. Dr. John Smith" required />
            <x-form-input name="email" label="Email Address" type="email" :value="$professor->getEmail()" placeholder="e.g. j.smith@university.edu" required />
            <x-form-select name="department_id" label="Department" :options="$departmentOptions" :selected="$professor->getDepartmentId()" placeholder="-- No Department --" />

            <div class="form-divider"></div>
            <div class="form-actions">
                <x-button :href="route('professors.index')" variant="secondary">Cancel</x-button>
                <x-button type="submit" variant="primary">Save Changes</x-button>
            </div>
        </form>
    </x-card>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ url('css/modules.css') }}">
    <link rel="stylesheet" href="{{ url('css/professors-edit.css') }}">
@endpush
