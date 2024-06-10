<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'checkout_id',
        'email',
        'quantity',
        'price',
        'is_paid',
        'shipping',
        'url'
    ];
}