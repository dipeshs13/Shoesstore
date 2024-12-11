<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    //
    use HasFactory;
    protected $table = "orders";

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'address',
        'shoes',
        'shoe_size',
        'phone_number',
        'payment_method',
        'user_id',
    ];
}
