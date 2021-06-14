<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $guarded = [];

    protected $table = 'action';

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function text()
    {
        return $this->morphOne(Text::class, 'tagable');
    }


}
