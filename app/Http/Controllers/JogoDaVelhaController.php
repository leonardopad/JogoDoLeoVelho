<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JogoDaVelha;

class JogoDaVelhaController extends Controller
{
    public function index(Request $request) {
        $jogo_velha = JogoDaVelha::getJogoDaVelha($request);
        return JogoDaVelha::checkGanhadorByJogoVelha($jogo_velha);
    }
}
