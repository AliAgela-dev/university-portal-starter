@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('content')

<x-card title="Dashboard">

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:20px;">

    <div style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
        <h3>Departments</h3>
        <h1>{{ $departmentsCount }}</h1>
    </div>

    <div style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
        <h3>Students</h3>
        <h1>{{ $studentsCount }}</h1>
    </div>

    <div style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
        <h3>Courses</h3>
        <h1>{{ $coursesCount }}</h1>
    </div>

    <div style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
        <h3>Professors</h3>
        <h1>{{ $professorsCount }}</h1>
    </div>

</div>

</x-card>

@endsection