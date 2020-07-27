@extends('layout.base')


@section('jumbotron')
    <h1>Order №{{ $order->id }}</h1>
@endsection

@section('content')
    <div class="col-md-12">
        <p>Name: {{ $order->customer_name }}</p>
        <p>Email: {{ $order->email }}</p>
        <p>Phoone: {{ $order->phone }}</p>
        <p>Feedback: {{ $order->feedback }}</p>
    </div>
@endsection
