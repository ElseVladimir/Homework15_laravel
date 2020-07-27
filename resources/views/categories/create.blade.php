@extends('layout.base')

@section('jumbotron')
    <h1>Create categories form</h1>
@endsection

@section('content')
    <div class="col-md-6">
        @include('partials.errors')
        <form method="post" action="/categories">

            @csrf

            <div class="form-group">
                <label for="categories">Categorie name:</label>
                <input type="text" name="categories" value="{{ old('categories') }}" id="categories" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success">Create</button>
            </div>

        </form>
    </div>
@endsection
