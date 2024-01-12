@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <p>{!! $project->body !!}</p>
        <button class="btn btn-primary d-inline-block"><a class="text-white text-decoration-none"
                href="{{ route('admin.projects.edit', $project->id) }}">Edit</button>
        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger cancel-button" data-item-title="{{ $project->title }}" type="submit">Delete</button>
        </form>
        <button class="btn btn-warning d-inline-block"><a class="text-black text-decoration-none"
                href="{{ route('admin.projects.index') }}">Back</a></button>
    </section>
    @include('partials.modal_delete')
@endsection
