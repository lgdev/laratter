
@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav >
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
           
        </ul>
    </nav>
    </div>    
<div class="row">
        <form action="/messages/create" method="post" novalidate>
            <div class="form-group @if($errors->has('message')) was-validated @endif">
            {{ csrf_field() }}
            <input type="text" name="message" class="form-control" placeholder="Qué estas pensando?" required />
            @if ($errors->has('message'))
                @foreach($errors->get('message') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                @endforeach
            @endif
            </div>
        </form>
</div>






    <div class="row">
        @forelse ($messages as $message)
            <div class="col-6">
            <img class="img-thumbnail" src="{{$message['image']}}" alt="">
            <p class="card-text"> {{$message['content']}}
            <a href="/messages/{{$message['id']}}">Leer mas</a>
            </p>
            </div>
        @empty
        <p>No tienes mensajes destacados</p>
        @endforelse
    </div>
@endsection