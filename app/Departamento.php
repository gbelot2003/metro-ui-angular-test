<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departamentos';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationship with Alerta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alertas(){
        return $this->hasMany('App\Alerta', 'departamentos_id', 'id');
    }

    /**
     * Relationship with Municipio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios(){
        return $this->hasMany('Municipio', 'departamentos_id', 'id');
    }
}
