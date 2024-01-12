@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>
        @foreach ($projects as $project)
            <a class="mt-2 d-block" href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a>
        @endforeach
        <button class="btn btn-primary mt-3">
            <a class="text-white text-decoration-none" href="{{ route('admin.projects.create') }}">Create</a>
        </button>
    </section>
@endsection
