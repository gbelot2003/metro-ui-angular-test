<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoagresion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipoagresions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoagresion'];

    /**
     * Relationship with Agresioncategoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function agresiones(){
        return $this->hasMany('App\Agresioncategoria', 'tipoagresion_id', 'id');
    }
}
