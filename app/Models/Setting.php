<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_addr',
        'company_addr2',
        'company_phone',
        'company_email',
        'company_website',
        'company_logo',
        'invoice_logo',
        'fav_icon'
    ];
}
