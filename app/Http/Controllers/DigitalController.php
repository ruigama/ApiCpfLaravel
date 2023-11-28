<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digital;

class DigitalController extends Controller
{
    public function buscaDados($cpf)
    {
        $pesquisa = Digital::where('CPF', '=', $cpf)->get();

        return response()->json(['dados' => $pesquisa]);
    }
}
