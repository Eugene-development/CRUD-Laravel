<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
