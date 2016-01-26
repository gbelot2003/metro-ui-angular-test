<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agredido extends Model
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
    protected $fillable = ['alertas_id', 'name', 'generos_id', 'medios_id', 'tiposujetoagredidos_id', 'agresions_id'];

    /**
     * Relationship with Alertas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alertas(){
        return  $this->belongsTo('App\Alerta', 'alertas_id', 'id');

    }

    /**
     * Relationship with Genero
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function generos(){
        return $this->belongsTo('App\Genero', 'generos_id', 'id');
    }

    /**
     * Relationship with Tiposujetoagredido
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tiposujetoagredido(){
        return  $this->belongsTo('App\Tiposujetoagredido', 'tiposujetoagredidos_id', 'id');
    }

    /**
     * Relationship with Medio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipomedio(){
        return $this->belongsTo('App\Tiposistema', 'medios_id', 'id');
    }

    /**
     * Relationship with Agresion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agresiones(){
        return $this->belongsTo('App\Agresion', 'agresions_id', 'id');
    }

    /**
     * Scope Query for Guet the years related to Agredido
     *
     * @param $query
     */
    public function scopeYears($query){
        $query->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->select('alertas.year')
            ->GroupBy('alertas.year');
    }

    public function scopeAgredidosByYear($query, $year){
        $query->Join('tiposujetoagredidos', 'agredidos.tiposujetoagredidos_id', '=', 'tiposujetoagredidos.id')
            ->Join('agresions', 'agredidos.agresions_id', '=', 'agresions.id')
            ->Join('agresioncategorias', 'agresions.agresioncategorias_id', '=', 'agresioncategorias.id')
            ->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->select(DB::raw('agredidos.agresions_id as id, agresions.agresion, Count(agredidos.agresions_id) as contador'))
            ->where('alertas.year', '=', $year)
            ->groupBy('agresions.agresion');
    }
}