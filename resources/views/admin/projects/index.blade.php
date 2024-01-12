@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>
        @foreach ($projects as $project)
            <a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a> <br>
        @endforeach
    </section>
@endsection
