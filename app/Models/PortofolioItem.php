<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'portofolio_id',
        'image',
        'title',
        'description',
        'category',
        'url'
    ];

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }
}
