<?php

namespace App\Models;
use App\Models\Marca;
use App\Models\Talla;
use App\Models\Proveedor;
use App\Models\Categorias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prendas extends Model
{
    use HasFactory;

    protected $table = 'prendas';
    protected $primaryKey = 'id_prendas';

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
    public function talla()
    {
        return $this->belongsTo(Talla::class, 'id_talla');
    }
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'id_categoria');
    }
    
}
