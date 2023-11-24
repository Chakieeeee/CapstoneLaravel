<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'isAvailable',
        'Description',
        'Price',
        'Image',
        'min',
        'max',
        
        
    ];
}
