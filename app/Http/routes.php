<?php

Route::get('/', function () {
    return view('main');
});

Route::get('api/reportes/tipo-sujeto-agredido', 'ReportesController@tipoSujetoAgredido');