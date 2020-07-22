@extends('layout.base')

@section('jumbotron')
    <h1>Update products form</h1>
@endsection

@section('content')
    <div class="col-md-6">

        @include('partials.errors')

        <form method="post" action="/products/{{ $product->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" name="title" value="{{ $product->title }}" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="Slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="{{ $product->slug }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Description">Description:</label>
                <textarea type="text" name="description" id="description"  class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>

        </form>
    </div>
@endsection
