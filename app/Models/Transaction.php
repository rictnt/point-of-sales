<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'bank_id', 'transaction_type','amount','description'];

    protected $casts = [
        'date' => 'date'
    ];
}
