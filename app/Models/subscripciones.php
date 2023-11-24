<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscripciones extends Model
{
    use HasFactory;

    protected $table = 'subscripciones';
    protected $fillable = ['correo'];
}

