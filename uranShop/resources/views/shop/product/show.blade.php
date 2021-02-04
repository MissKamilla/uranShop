@extends('layouts.app')

@section('title', 'Show product')


@section('content')

<div class="text-center">
    <h2 >{{ $product->name }}</h2>
    <img src="{{$product->img}}" alt="" class="img-fluid">
    <p>{{ $product->description}}</p>
</div>

<a href="{{route('shop')}}">Go homes</a>
@stop