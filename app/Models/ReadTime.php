<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadTime extends Model
{
    // use HasFactory;

    protected $table = 'read_times';

    protected $fillable = ['book_id', 'read_date', 'read_minute', 'user_id'];
}
