@csrf
<div class="form-group flex-row row">
    <label for="name" class="col-md-4 col-form-label">Name</label>
    <div class="col-md-7">
        <input type="text" name="name" id="name" 
            class="form-control lf--input @error('name') is-invalid @enderror"
            value="{{old('name', $product->name??'')}}">
        @error('name')
            <div class="invalide-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group  flex-row row">
    <label for="slug" class="col-md-4 col-form-label">Slug</label>
    <div class="col-md-7">
        <input type="text" name="slug" id="slug" 
            class="form-control lf--input @error('slug') is-invalid @enderror" 
            value="{{old('slug',$product->slug??'')}}">
        @error('slug')
            <div class="invalide-feedback">{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group flex-row">
    @if (isset($product))
        <img src="{{$product->img}}" alt="" class="col-8">
    @endif
</div>
<div class="form-group  flex-row row">
    <label for="file" class="col-md-4 col-form-label">File</label>
    <div class="col-md-7">
        <input type="file" name="img" id="file" 
            class="form-control lf--input @error('img') is-invalid @enderror">
        @error('img')
            <div class="invalide-feedback">{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group  flex-row row">
    <label for="description" class="col-md-4 col-form-label">Description</label>
    <div class="col-md-12">
        <textarea name="description" id="description" class="form-control lf--input @error('description') is-invalid @enderror" 
        placeholder="{{old('description',$product->description??'')}}"></textarea>
        @error('description')
            <div class="invalide-feedback">{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group  flex-row row">
    <label for="category_id" class="col-md-4 col-form-label">Category</label>
    <div class="col-md-7">
        <select name="category_id" id="category_id" class="form-control lf--input">
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
</div>
<div class="form-group flex-row row mb-0">
    <div class="offset-md-4 ">
        <button class="lf--submit btn btnTable btnAdd">Save product</button>
    </div>
</div>
