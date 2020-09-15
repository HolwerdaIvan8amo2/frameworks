@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($wishes as $wish)

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="storage/wish_images/{{ $wish->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$wish->wish_name}}</h5>
                            <p class="card-text">{{$wish->description}}</p>
                            <h1><a href="{{$wish->URL}}" class="text-danger">{{$wish->price}}</a></h1>
                            <a href="/wish/{{$wish->id}}/edit">Edit</a>
                            <a class="text-danger" href="/delete/{{$wish->id}}">delete</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
