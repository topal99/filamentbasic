<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'image',
        'title',
        'walktitle',
        'subtitle',
        'link1',
        'link2',
        'is_active',
    ];
}
