<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tiposistemas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tiposistema'];
}
