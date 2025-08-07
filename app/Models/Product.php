<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory ;

    protected $guarded = [];

    function category(){
        return $this->belongsTo(Category::class)->withDefault();
        }

        function reviews(){
            return $this->hasMany(Review::class);
        }

        function gallery(){
            return $this->morphMany(Image::class , 'imageable')->where('type','gallery');
        }

        function image(){
            return $this->morphOne(Image::class , 'imageable')->where('type','main');
        }



        // function carts(){
        //     return $this->hasMany(Cart::class);
        // }

        function orderDetails(){
        return $this->hasMany(orderDetails::class);
        }

    }


