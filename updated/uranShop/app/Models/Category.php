<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','slug'
    ];
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = \Str::slug( empty($value) ? $this->name : $value,'-');
    }
    public function products(){
        return $this->hasMany(\App\Product::class);
    }
}