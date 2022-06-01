<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productimages extends Model
{
    use HasFactory;

    public function files() {
        return $this->hasMany('App\Models\files','type_id','id')->where("type","100")->orderBy('sort') ;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

}
