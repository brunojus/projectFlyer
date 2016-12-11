<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Paciente;

class PacienteController extends Controller
{
    publcic function index()
    {
    	return view('paciente.index');
    }
}
