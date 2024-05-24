<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $precio
 * @property $descripcion
 * @property $codigo
 * @property $existencias
 * @property $proveedor_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore $proveedore
 * @property ClienteProducto[] $clienteProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    protected $table = 'productos';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['precio', 'descripcion', 'codigo', 'existencias', 'proveedor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->hasMany(Proveedor::class);
    }


    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }

}
