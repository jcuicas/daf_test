<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $codigo
 * @property $producto
 * @property $idcategoria
 * @property $existencia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'codigo',
        'producto',
        'idcategoria',
        'existencia'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'idcategoria', 'id');
    }

    public function scopeProducto($query, $producto)
    {
        if(trim($producto) != '')
        {
            $query->where('producto', 'LIKE', "%$producto%")
                  ->orWhere('codigo', 'LIKE', "%$producto%");
        }
    }
}
