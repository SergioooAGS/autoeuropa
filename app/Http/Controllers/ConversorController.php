<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function convertir(Request $request)
    {
        // Obtenemos el valor del peso mexicano
        $peso_mexicano = $request->input('peso_mexicano');

        // Convertimos el peso mexicano a peso argentino
        $peso_argentino = $peso_mexicano * 0.06;

        // Devolvemos el resultado
        return response()->json([
            'peso_argentino' => $peso_argentino,
        ]);
    }
}