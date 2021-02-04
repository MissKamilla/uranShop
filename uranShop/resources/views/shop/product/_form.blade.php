@csrf
<div class="form-group">
    <label for="name">Product name</label>
    <input type="text" name="name" id="name" 
        class="form-control @error('name') is-invalid @enderror"
        value="{{old('name', $product->name??'')}}">
    @error('name')
        <div class="invalide-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Product slug</label>
    <input type="text" name="slug" id="slug" 
        class="form-control @error('slug') is-invalid @enderror" 
        value="{{old('slug',$product->slug??'')}}">
    @error('slug')
        <div class="invalide-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    @if (isset($product))
        <img src="{{$product->img}}" alt="">
    @endif
    
    <label for="file">Product file</label>
    <input type="file" name="img" id="file" 
        class="form-control @error('img') is-invalid @enderror">
    @error('img')
        <div class="invalide-feedback">{{$message}}</div>
        @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
    placeholder="{{old('description',$product->description??'')}}"></textarea>
    @error('description')
        <div class="invalide-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">category</label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $category) 
            @if (isset($product))
                @if ($product->category_id==$category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select>
</div>
<button class="btn btn-info">Save product</button>

