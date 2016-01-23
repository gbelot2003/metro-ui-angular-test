<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipios';

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
        return $this->hasMany('App\Alertas', 'municipios_id', 'id');
    }

    /**
     * Relationship with Departamento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamentos(){
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id');
    }
}
