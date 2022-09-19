<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requerimiento;
use App\Models\Category;

class RequerimientoController extends Controller
{
    public function create(){

        $categorias=Category::all();    

        return view('formulario.create', compact('categorias'));
    }

   
}
