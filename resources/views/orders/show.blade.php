@extends('layout.base')


@section('jumbotron')
    <h1>Order №{{ $page->id }}</h1>
@endsection

@section('content')
    <div class="col-md-12">
        <p>Name: {{ $page->customer_name }}</p>
        <p>Email: {{ $page->email }}</p>
        <p>Phoone: {{ $page->phone }}</p>
        <p>Feedback: {{ $page->feedback }}</p>
    </div>
@endsection
