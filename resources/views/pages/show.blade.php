@extends('layout.base')
@section('jumbotron')
    <h1>{{ $page->title }}</h1>
@endsection


@section('content')
    <div class="col-md-4">
        <p>{{ $page->content }}</p>
    </div>
@endsection
