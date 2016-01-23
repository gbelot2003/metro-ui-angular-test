<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mes';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationship with Alerta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alertas(){
        return  $this->hasMany('App\Mes', 'mes_id', 'id');
    }
}
