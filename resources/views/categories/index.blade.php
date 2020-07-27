@extends('layout.base')
@section('jumbotron')
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <h1>Album example</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
        etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
    <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        <a href="/categories/create" class="btn btn-success">Create new categorie</a>
    </p>
@endsection


@section('content')

    @foreach($categories as $category)
        <div class="col-md-12">
            <div class="card mb-4 shadow-sm">

                <div class="card-body">
                    <p class="card-text"> {{ $category->categories }} </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/categories/{{ $category->slug }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="/categories/{{ $category->slug }}/edit" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form method="post" action="/categories/{{ $category->slug }}">
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
