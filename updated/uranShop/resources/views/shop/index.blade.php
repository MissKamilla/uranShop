@extends('layouts.app')

@section('title', 'Shop')



@section('content')

@include('shop._message')

<a href="{{route('category.create')}}" class="btn btnTable btnAdd">Add Category</a>
<section class="mb-3 container-md text-center" >
<h2 class="text-center mb-3">Categories</h2>
    @foreach ($categories as $category) 
        <a href="{{route('category.show', ['category'=>$category->id])}}" class="btn btn-secondary">{{ $category->name }}</a>
    @endforeach
</section>


<a href="{{route('product.create')}}" class="btn btnTable btnAdd">Add Product</a>

<h2 class="text-center mb-3">Products</h2>
<table class="table bg-light">
    <thead>
        <tr>
            <th>#</th>
            <th>img</th>
            <th>name</th>
            <th>slug</th>
            <th>description</th>
            <th>category</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product) 
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> 
                <a href="{{route('product.show', ['product'=>$product->id])}}">
                    <img src="{{$product->img}}" alt="{{$product->name}}"  style="width:200px" class="imgScale">
                </a>
            </td>
            <td>{{$product->name}}</td>
            <td>{{$product->slug}}</td>
            <td>{{$product->description}}</td>
            <td>
                @foreach ($categories as $category) 
                    @if ($product->category_id==$category->id)
                        {{$category->name}} 
                    @endif
                @endforeach
            </td>
            <td>
                <a href="{{route('product.edit', ['product'=>$product->id])}}" class="btn btnTable btnEdit px-4">Edit</a>
                <form action="/shop/product/{{$product->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btnTable btnDelete">Delate</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection