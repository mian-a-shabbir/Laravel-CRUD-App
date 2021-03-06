@extends('layout')

@section('content')

    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project Title" value="{{ old('title') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
            <textarea name="description" placeholder="Project Description" cols="30" rows="10" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
            </div>
        </div>
        
        <div class="field">
            <div class="control">
                <button type="submit">Create Project</button>
            </div>
        </div>

        @include('errors')

    </form>
@endsection