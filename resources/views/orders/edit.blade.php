@extends('layout.base')

@section('jumbotron')
    <h1>Update page form</h1>
@endsection

@section('content')
    <div class="col-md-6">

        @include('partials.errors')

        <form method="post" action="/homework15/public/orders/{{ $order->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" value="{{ $order->customer_name }}" id="customer_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" value="{{ $order->email }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" name="phone" id="phone" value="{{ $order->phone }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="feedback">feedback:</label>
                <textarea type="text" name="feedback" id="feedback"  class="form-control">{{ $order->feedback }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>

        </form>
    </div>
@endsection
