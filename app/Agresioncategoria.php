<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresioncategoria extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agresioncategorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['agresioncategoria', 'tipoagresion_id'];

    /**
     * Relationship with Tipoagresion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoagresion(){
        return $this->belongsTo('App\Tipoagresion', 'tipoagresion_id', 'id');
    }

    /**
     * Relationship with Agresion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agresiones(){
        return $this->hasMany('App\Agresion', 'agresioncategorias_id', 'id');
    }
}
