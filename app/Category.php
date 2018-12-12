<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
    protected $table = 'categories';

=======
>>>>>>> upstream/Alco
    public function products()
    {
        return $this->hasMany('App\Product');
    }
<<<<<<< HEAD
    public function subcategories()
=======
    public function sub_categories()
>>>>>>> upstream/Alco
    {
        return $this->hasMany('App\Sub_Category');
    }
}
