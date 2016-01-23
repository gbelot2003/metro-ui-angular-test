<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agredidos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'number', 'mes_id', 'year', 'departamentos_id', 'municipios_id', 'body', 'source', 'source_url', 'published_state', 'published_date', 'usuarios_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agredidos(){
        return $this->hasMany('App/Agredido', 'alertas_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agresores(){
        return $this->hasMany('App/Agresor', 'alertas_id', 'id');
    }

    /**
     *Relationship with Mes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meses(){
        return $this->belongsTo('App\Mes', 'mes_id', 'id');
    }

    /**
     * Relationship with Departamento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamentos(){
        return $this->belongsTo('App\Departamento', 'departamentos_id', 'id');
    }

    /**
     * Relationship with Municipio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipios(){
        return $this->belongsTo('App\Municipio', 'municipios_id', 'id');
    }
}
