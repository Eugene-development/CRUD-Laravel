<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $guarded = [];

    protected $table = 'nvg_head';

    public function rubric()
    {
        return $this->hasMany(Rubric::class);
    }

    public function text()
    {
        return$this->hasMany(Text::class);
    }


    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
