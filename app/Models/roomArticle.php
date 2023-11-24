<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomArticle extends Model
{
    use HasFactory;
    protected $fillable = ['roomId','roomName','roomPrice',];
}
