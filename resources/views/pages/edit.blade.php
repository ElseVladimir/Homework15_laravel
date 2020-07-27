@extends('layout.base')

@section('jumbotron')
    <h1>Update page form</h1>
@endsection

@section('content')
    <div class="col-md-6">

        @include('partials.errors')

        <form method="post" action="/pages/{{ $page->slug }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ $page->title }}" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="{{ $page->slug }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="intro">Price:</label>
                <input type="text" name="intro" id="intro" value="{{ $page->intro }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Description:</label>
                <textarea type="text" name="content" id="content"  class="form-control">{{ $page->content }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>

        </form>
    </div>
@endsection
