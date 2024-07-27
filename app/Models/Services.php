<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory ;

    protected $fillable = [
        'is_active',
        'titleservice',
        'subtitleservice',
        'titleservice1',
        'subtitleservice1',
        'titleservice2',
        'subtitleservice2',
        'titleservice3',
        'subtitleservice3',
        'titleservice4',
        'subtitleservice4',
        'titleservice5',
        'subtitleservice5',
        'titleservice6',
        'subtitleservice6',
    ];
}
