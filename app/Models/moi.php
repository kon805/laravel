<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'mail',
        'events',
        'group',
    ];
}
