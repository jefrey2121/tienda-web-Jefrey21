<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;
    protected $table = 'talla';
    protected $primaryKey = 'id_talla';
    public function prendas()
    {
        return $this->hasMany(prendas::class, 'id_talla');
    }
}
