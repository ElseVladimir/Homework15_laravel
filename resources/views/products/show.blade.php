@extends('layout.base')

    @section('jumbotron')
        <h1>{{ $product->title }}</h1>
    @endsection


    @section('content')
        <div class="col-md-12">
            <p>{{ $product->description }}</p>
        </div>
    @endsection
