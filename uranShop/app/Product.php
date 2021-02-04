<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'img','description','category_id'
    ];
    public function getImgAttribute($value){
        //$value-  из БД
         return $value ? $value : asset('/images/noimg.jpg');
     }
    public function setImgAttribute($img)
    {
        $fName = $img->getClientOriginalName();
        $img->move(public_path('uploads'),$fName);
        $this->attributes['img'] ='/uploads/'.$fName;
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = \Str::slug( empty($value) ? $this->name : $value,'-');
    }
}
