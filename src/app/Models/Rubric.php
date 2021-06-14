<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $guarded = [];

    protected $table = 'rubric';

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function head()
    {
        return $this->belongsTo(Head::class);
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
