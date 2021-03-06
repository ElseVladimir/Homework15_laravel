@extends('layout.base')
@section('jumbotron')
    <h1>Album example</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
        etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
    <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        <a href="/orders/create" class="btn btn-success">Create new order</a>
    </p>
@endsection


@section('content')
    @foreach($orders as $order)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                    <p class="card-text"> {{ $order->customer_name }} </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/orders/{{ $order->id }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="/orders/{{ $order->id }}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form method="post" action="/orders/{{ $order->id }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-outline-secondary">Delete</button>
                            </form>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
