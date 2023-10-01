<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatements extends Model
{
    protected $table = 'treatements'; // Match the table name in the migrations
    protected $primaryKey = 'id'; // Match the primary key in the migrations
    protected $fillable = ['treat_name', 'treat_price']; // Match the column names in the migrations

    use HasFactory;
}
