@extends('layout.base')

@section('jumbotron')
    <h1>Create page form</h1>
@endsection

@section('content')
    <div class="col-md-6">
        @include('partials.errors')
        <form method="post" action="/pages">

            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" value="{{ old('slug') }}" id="slug" class="form-control">
            </div>

            <div class="form-group">
                <label for="intro">Intro:</label>
                <input type="text" name="intro" value="{{ old('intro') }}" id="intro" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea type="text" name="content" value="{{ old('content') }}" id="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Create</button>
            </div>

        </form>
    </div>
@endsection
