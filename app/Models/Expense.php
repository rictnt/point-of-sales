<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'schedule', 'transaction_method', 'expense_date', 'expense_by', 'amount', 'description'];
}
