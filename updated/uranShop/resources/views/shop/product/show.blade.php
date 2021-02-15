@extends('layouts.app')

@section('title', 'Show product')


@section('content')

<div class="m-auto col-6 border product blog">
    <h2 ><b>Name:</b> {{ $product->name }}</h2>
    <div class="image"><img src="{{$product->img}}" alt=""></div>
    <p><b>Description:</b> {{ $product->description}}</p>
</div>

<a href="{{route('shop')}}" class="btn btnTable btnGoHome">Go home</a>
@stop