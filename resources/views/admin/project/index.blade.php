@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>
        @foreach ($projects as $project)
            <p>{{ $project->title }}</p>
            <a href="{{ route('admin.projects.show', $project->id) }}"></a>
        @endforeach
    </section>
@endsection
