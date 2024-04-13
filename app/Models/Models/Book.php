<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Models\BookFactory; 

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'isbn',
        'title',
        'author',
        'description',
        'date_published',
    ];

    protected $factories = BookFactory::class; 
}
