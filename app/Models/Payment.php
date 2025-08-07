<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory ;

    protected $guarded = [];

    function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }

    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

}
