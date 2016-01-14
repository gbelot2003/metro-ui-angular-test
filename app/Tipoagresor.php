<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoagresor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipoagresors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoagresor'];
}
