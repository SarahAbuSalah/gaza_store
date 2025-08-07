<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory ;

    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    function payments(){
        return $this->hasMany(Payment::class);
    }

    function orderDetails(){
        return $this->hasMany(OrderDetails::class);
        }
}
