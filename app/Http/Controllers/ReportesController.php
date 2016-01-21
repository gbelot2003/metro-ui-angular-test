<?php

namespace App\Http\Controllers;

use App\Alerta;
use App\Tiposujetoagredido;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{

    public function tipoSujetoAgredido(){

        $response = Tiposujetoagredido::select('tiposujetoagredido as y')->get();

        return $response;
    }
}
