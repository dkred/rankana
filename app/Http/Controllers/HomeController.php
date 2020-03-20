<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

       $artistas = DB::table('artistas')->paginate(16);
                                            
        if(!\Session::has('artistas')) \Session::put('artistas',$artistas);

        $categorias = DB::table('categorias')->get();
        if(!\Session::has('categorias')) \Session::put('categorias',$categorias);
       // $this->middleware('auth');

    }

   
    public function admin()
    {
    
        return view('home');
    }
     public function welcome()
    {

        return view('welcome');
    }
     public function nosotros()
    {
        return view('nosotros');
    }
     public function contacto()
    {
        return view('contacto');
    }
     public function productos($nombre_subcategoria  = '',$nombre_producto  = '')
    {
        $productos = DB::table('productos')
                        ->join('categorias','productos.id_categoria', '=','categorias.id_categoria')
                        ->paginate(20)
                        ;
        $categorias = DB::table('categorias')->get();
                                         
        if($nombre_producto != ''){
            $productos = DB::table('productos')
                        ->join('categorias','productos.id_categoria', '=','categorias.id_categoria')->where('productos.nombre','=',$nombre_producto)->get();
            return view('obra',['producto'=>$productos[0] ]);
        }
        if($nombre_subcategoria != ''){

            $productos = DB::table('productos')->join('categorias','productos.id_categoria', '=','categorias.id_categoria')->where('nombre_categoria',$nombre_subcategoria)
                                                ->paginate(20);
        }

        return view('productos',['productos'=>$productos]);
    }
     public function eventos($nombre_evento = '')
    {
        if($nombre_evento != ''){
            return view('evento');
        }
        return view('eventos');
    }   
     public function artistas($nombre_artista = '')
    {
        if($nombre_artista != ''){
            return view('autor');
        }
        return view('autores');
    }
   
}
