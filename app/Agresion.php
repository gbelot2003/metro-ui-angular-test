<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agresions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['agresion', 'agresioncategorias_id', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agredidos(){
        return $this->hasMany('App\Agredido', 'agresions_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Agresioncategoria', 'agresioncategorias_id', 'id');
    }
}
