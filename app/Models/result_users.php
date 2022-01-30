<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'timestamps',
        'name', 'phone', 'email',
        'rememberToken',
    ];
}
