@extends('layout.base')

@section('jumbotron')
    <h1>Update categories form</h1>
@endsection

@section('content')
    <div class="col-md-6">

        @include('partials.errors')

        <form method="post" action="/categories/{{ $category->slug }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="categories">Categories:</label>
                <input type="text" name="categories" value="{{ $category->categories }}" id="categories" class="form-control">
            </div>

            <div class="form-group">
                <label for="Slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="{{ $category->slug }}" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>

        </form>
    </div>
@endsection
