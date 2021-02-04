@csrf
<div class="form-group">
    <label for="name">Category name</label>
    <input type="text" name="name" id="name" 
        class="form-control @error('name') is-invalid @enderror"
        value="{{old('name', $category->name??'')}}">
    @error('name')
        <div class="invalide-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Category slug</label>
    <input type="text" name="slug" id="slug" 
        class="form-control @error('slug') is-invalid @enderror" 
        value="{{old('slug',$category->slug??'')}}">
    @error('slug')
        <div class="invalide-feedback">{{$message}}</div>
    @enderror
</div>
<button class="btn btn-info">Save category</button>

