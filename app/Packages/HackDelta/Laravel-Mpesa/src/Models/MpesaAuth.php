<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpesaAuth extends Model
{
    use HasFactory;

    protected $fillable = [
        'token', 'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'timestamp'
    ];

}
