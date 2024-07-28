<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    //add columns for icon, title, description
    protected $fillable = [
        'icon',
        'title',
        'description',
    ];
}
