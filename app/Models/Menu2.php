<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul','description'
    ];
}
