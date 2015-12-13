<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'repositorios';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'autores', 'fecha_publicacion', 'link', 'etiquetas', 'inputs', 'outputs', 'lenguaje_backend', 'lenguaje_frontend'];

}
