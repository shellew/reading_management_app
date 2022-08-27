<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_master extends Model
{
    // use HasFactory;
    
    protected $table = 'book_masters';

    protected $fillable = ['id', 'title','author','isbn','register_date','comment','status','image','user_id'];
}
