<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $guarded = [];

    protected $table = 'menu';

    public function head()
    {
        return$this->hasMany(Head::class);
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

