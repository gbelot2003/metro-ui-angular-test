<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agresors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alertas_id', 'name', 'generos_id', 'medios_id', 'tiposujetoagredidos_id', 'agresions_id'];
}
