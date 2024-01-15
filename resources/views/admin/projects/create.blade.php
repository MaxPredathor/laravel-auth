@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects Create</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" minlength="3">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <img id="uploadPreview" src="https://via.placeholder.com/300x200" alt="Placeholder">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            @foreach (config($technologies) as $item)
                <div class="w-50">{{ item->name }}</div>
                <img src="{{ item->image }}" alt="">
            @endforeach
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
