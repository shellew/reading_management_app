<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $table = 'user_masters';

    protected $fillable = ['user_name', 'mail_address', 'password'];
}
