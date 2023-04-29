<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable = [
        'book_name',
        'book_description',
        'book_author',
        'book_editorial',
        'book_page_number',
        'book_publication_date'
    ];

}
