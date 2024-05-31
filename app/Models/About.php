<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class About extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'description',
        'title',
        'subTitle',
        'image',
        'birthday',
        'website',
        'phone',
        'degree',
        'email',
        'city',
        'myPersonalInfo',
    ];
}
