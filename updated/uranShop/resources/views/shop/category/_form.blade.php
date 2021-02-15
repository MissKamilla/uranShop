@csrf
<div class="form-group flex-row row">
    <label for="name" class="col-md-4 col-form-label">Name</label>
    <div class="col-md-7">
        <input type="text" name="name" id="name" 
            class="form-control lf--input @error('name') is-invalid @enderror"
            value="{{old('name', $category->name??'')}}">
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
            value="{{old('slug',$category->slug??'')}}">
        @error('slug')
            <div class="invalide-feedback">{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group flex-row row mb-0">
    <div class="offset-md-4 ">
        <button class="lf--submit btn btnTable btnAdd">Save category</button>
    </div>
</div>