<?php

namespace App\Http\Controllers;


use App\AdjuntoDeEliminacionDeArticulo;
use App\Articulo;
use App\ArticuloDadoDeBaja;
use App\FotoDeArticulo;
use App\Http\Requests\AgregarArticuloDeInventarioRequest;
use App\Http\Requests\DarArticuloDeBajaRequest;
use App\Http\Requests\GuardarCambiosDeArticuloRequest;
use App\Http\Requests\SubirFotosDeArticulosRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storge;

class ArticulosController extends Controller
{
    public function index(){
        return view('articulos.index');
    }
    public function create(){
        return view('articulos.create');
    }
    public function store(Request $request){
        
        return redirect()->route('articulos.index')->with('success', 'articulo agregado correctamente');
    }
}
