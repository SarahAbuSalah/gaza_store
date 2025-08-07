<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory ;

    protected $guarded = [];

    function product(){
        return $this->belongsTo(Product::class)->withDefault();
        }

        function user(){
        return $this->belongsTo(User::class)->withDefault();
        }

}
