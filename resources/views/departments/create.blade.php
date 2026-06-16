{{--
    YOUR TASK (W10):  form to create a new department.

    Submit the form with:
        method="POST"
        action="{{ route('departments.store') }}"
        @csrf

    The controller validates these fields (use them as the input name=""):
        name   (required)

    TODO: build the form here.
--}}

@extends('layouts.app')

@section('your-title', 'Create Department')

@section('content')
<div class="container">
    <h1>Create New Department</h1>

    <x-button type="back" :href="route('departments.index')" />
    <x-card>
        <x-form action="{{ route('departments.store') }}" method="POST">
            @csrf

            <x-form-input
                name="name"
                label="Department Name"
                type="text"
                placeholder="e.g. Computer Science"
            />

            <x-button type="submit">Save Department</x-button>
        </x-form>
    </x-card>
</div>
@endsection