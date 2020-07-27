@extends('layout.base')

@section('jumbotron')
    <h1>{{ $category->slug }}</h1>
@endsection


@section('content')
    <div class="col-md-12">
        <p>{{ $category->categories}}</p>
    </div>
@endsection
