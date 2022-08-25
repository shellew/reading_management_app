<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInformation extends Model
{
    // use HasFactory;
    
    protected $table = 'book_information';

    protected $fillable = ['book_id', 'title','author','isbn','register_date','comment','status','image'];
}
