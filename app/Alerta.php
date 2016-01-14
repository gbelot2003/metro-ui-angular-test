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

}
