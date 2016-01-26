<?php

namespace App\Http\Controllers;

use App\Agredido;
use App\Alerta;
use App\Tiposujetoagredido;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{

    public function tipoSujetoAgredido(){

        $years = Agredido::years()->get();

        foreach($years as $y){
          $response = $y->year;
        }

        //$response = Agredido::agredidosByYear(2012)->get();

        return $response;
    }
}
