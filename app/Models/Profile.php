<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'owned_by',
        'company_name',
        'company_email',
        'phone',
        'location',
        'website'
    ];
}
