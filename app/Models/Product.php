<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Table Name
    protected $table = 'products';
    //fillable fields
    protected $fillable = [
        'name', 'description', 'price', 'image', 'quantity'
    ];

    //Category Relationship


}



?>
