<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioCategory extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'name',
        'slug',
    ];

    //add relationship to portfolio
    public function portfolio()
    {
        return $this->hasMany(Portofolio::class);
    }

}
