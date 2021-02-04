@extends('layouts.app')

@section('title', 'Show category')


@section('content')

<div class="text-center mb-3">
    <h2 >{{ $category->name }}</h2>
    <div>
        <a href="{{route('category.edit', ['category'=>$category->id])}}" class="btn btn-outline-primary">Edit category</a>
        <form action="/shop/category/{{$category->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="brn btn-outline-danger ">Delate</button>
        </form>
    </div>
    
</div>


<section class="container-md text-center">
    <div class="row">

        @foreach ($products as $product) 
        <div class="col-4 blog">
                <a href="{{route('product.show', ['product'=>$product->id])}}">
                    <img src="{{$product->img}}" alt="{{$product->name}}"  style="width:200px">
                </a>
            <p>name: {{$product->name}}</p>
            <p>description: {{$product->description}}</p>
            <div>
                <a href="{{route('product.edit', ['product'=>$product->id])}}" class="btn btn-success btn-sm px-4">Edit</a>
                <form action="/shop/product/{{$product->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="brn btn-primary btn-sm px-3">Delate</button>
                </form>
            </div>
        </div>    
        @endforeach
    </div>
</section>
<a href="{{route('shop')}}">Go homes</a>
@stop