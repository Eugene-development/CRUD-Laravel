<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $guarded = [];

    protected $table = 'nvg_menu';

    public function head()
    {
        return$this->hasMany(Head::class);
    }

    public function text()
    {
        return$this->hasMany(Text::class);
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'tagable');
    }

}

