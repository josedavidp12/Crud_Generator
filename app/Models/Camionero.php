<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camionero
 *
 * @property $id
 * @property $nombre
 * @property $poblacion
 * @property $dni
 * @property $telefono
 * @property $direccion
 * @property $salario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camionero extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'poblacion', 'dni', 'telefono', 'direccion', 'salario'];

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }

    public function camions()
    {
        return $this->belongsToMany(Camion::class);
    }
}
