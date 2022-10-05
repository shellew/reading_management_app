<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMaster extends Model
{
    // use HasFactory;
    
    protected $table = 'book_masters';

    protected $fillable = ['title','author','register_date','memo','status','image','user_id'];
}
