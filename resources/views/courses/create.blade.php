@extends('layouts.app')

@section('page-title','Create Course')

@section('content')

<x-card title="Create Course">

<x-button 
type="back"
:href="route('courses.index')"
/>

<x-form 
action="{{ route('courses.store') }}"
method="POST">

@csrf

<x-form-input
name="title"
label="Course Title"
placeholder="e.g. Database Systems"
required
/>

<x-form-input
name="course_code"
label="Course Code"
placeholder="e.g. IT205"
required
/>

<x-form-input
name="credit_hours"
label="Credit Hours"
type="number"
placeholder="e.g. 3"
required
/>

<x-form-select
name="department_id"
label="Department"
:options="$departmentOptions"
/>

<x-button type="submit">
Save Course
</x-button>

</x-form>

</x-card>

@endsection

