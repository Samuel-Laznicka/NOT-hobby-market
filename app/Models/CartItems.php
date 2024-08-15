<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'name',
        'description', 
        'price', 
        'quantity',
        'subtotal'
    ];

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Products::class);
    }   

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
