@extends('layouts.app')

@section('title', 'Show category')


@section('content')

<div class="text-center mb-3">
    <h2 >{{ $category->name }}</h2>
    <div>
        <a href="{{route('category.edit', ['category'=>$category->id])}}" class="btn btnTable btnEdit">Edit  category</a>
        <form action="/shop/category/{{$category->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btnTable btnDelete px-5">Delate</button>
        </form>
    </div>
</div>
<section class="row blogs">
    @foreach ($products as $product) 
    <div class="col-4 border product blog">
        <a href="{{route('product.show', ['product'=>$product->id])}}">
            <div class="image"><img src="{{$product->img}}" alt="{{$product->name}}"></div>
        </a>
        <p><b>Name:</b> {{$product->name}}</p>
        <p class="productDescription"><b>Description:</b> {{$product->description}}</p>
        <div class="text-center">
            <a href="{{route('product.edit', ['product'=>$product->id])}}" class="btn btnTable btnEdit px-4">Edit</a>
            <form action="/shop/product/{{$product->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btnTable btnDelete">Delate</button>
            </form>
        </div>
    </div>
    @endforeach
    <button id="showProduct" class="btn hidden btnShow"><span>Show more</span></button> 
</section>
<a href="{{route('shop')}}" class="btn btnTable btnGoHome">Go home</a>
@stop