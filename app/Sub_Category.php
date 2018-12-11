<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
<<<<<<< HEAD
    protected $table = 'subcategories';

=======
>>>>>>> upstream/Alco
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
