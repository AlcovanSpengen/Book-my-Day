<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
<<<<<<< HEAD
    
=======
>>>>>>> upstream/Alco
    public function products() 
    {
        return $this->belongsToMany('App\Product');
    }
}
