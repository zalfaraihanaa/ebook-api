<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =[
        'nama','date_of_birth','place_of_birth','gender','email','phone'
    ];
}