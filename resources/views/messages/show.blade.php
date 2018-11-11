@extends('layouts.app')
@section('content')
<h1 class="h3">Mensaje Id: {{ $message -> id}}</h1>
<img class="img-thumbnail" src="{{$message->image}}" alt="">
<p class="card_text">{{$message -> content}}
<small class="text-muted"> {{$message->created_at}} </small></p>
@endsection