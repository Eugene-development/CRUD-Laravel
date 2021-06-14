<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $guarded = [];

    protected $table = 'text';


    public function tagable()
    {
        return $this->morphTo();
    }
}
