@extends('layout.base')

@section('jumbotron')
    <h1>Create products form</h1>
@endsection

@section('content')
    <div class="col-md-6">
        @include('partials.errors')
        <form method="post" action="/products">

            @csrf

            <label for="categoryList">Categories</label>
            <select multiple class="form-control" name="categorie_id">
                @foreach($category as $cat)
                <option id="categorie_id" value="{{ $cat->id }}">{{ $cat->categories }}</option>
                @endforeach
            </select><br>

            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="Slug">Slug:</label>
                <input type="text" name="slug" id="slug" class="form-control">
            </div>

            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="Description">Description:</label>
                <textarea type="text" name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Create</button>
            </div>

        </form>
    </div>
@endsection
