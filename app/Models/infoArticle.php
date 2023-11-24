<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoArticle extends Model
{
    use HasFactory;
    protected $fillable = ['fName', 'lName', 'email', 'contact','address','adult','children',];

}
