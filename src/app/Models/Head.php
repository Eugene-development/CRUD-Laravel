<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $guarded = [];

    protected $table = 'head';

    public function rubric()
    {
        return $this->hasMany(Rubric::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
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
