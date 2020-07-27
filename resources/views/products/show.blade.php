@extends('layout.base')

    @section('jumbotron')
        <h1>{{ $product->title }}</h1>
    @endsection


    @section('content')
        <div class="col-md-12">
            <h3>Price:{{ $product->price }}</h3>
            <h3>Description:{{ $product->description }}</h3>
        </div>
    @endsection
