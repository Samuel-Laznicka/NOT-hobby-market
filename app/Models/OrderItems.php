<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'name', 
        'description', 
        'price', 
        'quantity',
        'subtotal'
    ];

    public function cartItems(): BelongsTo
    {
        return $this->belongsTo(CartItems::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}