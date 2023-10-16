<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';

    protected $fillable = [
    
        'item_name',
        'item_price',
        'item_count',
    ];
}
