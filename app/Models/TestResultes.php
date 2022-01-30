<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResultes extends Model
{
    use HasFactory;

    protected $fillable = [
        'pok', 'unig', 'nespr', 'pred', 'otverg',
        'result_user_id',
    ];
}
