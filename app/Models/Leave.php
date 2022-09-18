<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Facades\DB;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leave';
    protected $fillable = [
        'id',
        'name',
        'position',
        'typeofleave',
        'date_start',
        'date_end',
        'date_return',
        'phone_address',
        'reason',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at'=> 'datetime'
    ];
    
}
