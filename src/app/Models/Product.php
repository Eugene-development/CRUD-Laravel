<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $table = 'product';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function action()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'tagable');
    }

    public function text()
    {
        return $this->morphOne(Text::class, 'tagable');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'tagable');
    }

}
