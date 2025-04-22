<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpicySnacks extends Model
{
    use HasFactory;

    protected $table = 'spicy_snacks'; 

    protected $fillable = ['name', 'description', 'price']; 
}
