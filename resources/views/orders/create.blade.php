@extends('layout.base')

@section('jumbotron')
    <h1>Create order form</h1>
@endsection

@section('content')
    <div class="col-md-6">
        @include('partials.errors')
        <form method="post" action="/orders">

            @csrf

            <div class="form-group">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" value="{{ old('customer_name') }}" id="customer_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="feedback">feedback:</label>
                <textarea type="text" name="feedback" value="{{ old('feedback') }}" id="feedback" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Create</button>
            </div>

        </form>
    </div>
@endsection
