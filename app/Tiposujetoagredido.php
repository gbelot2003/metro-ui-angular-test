<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposujetoagredido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tiposujetoagredidos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tiposujetoagredido'];
}
