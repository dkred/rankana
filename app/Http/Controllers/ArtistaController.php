<?php

namespace App\Http\Controllers;

use App\Artista;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class ArtistaController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }
    public function index(Request $request){
    	
    	if($request){
    		$query = trim($request->get('search'));
    		$artistas = Artista::where('nombre_artista','LIKE','%'.$query.'%')
    			->orderBy('id_artista','asc')
    			->paginate(10);
    		return view('artistas.index',['artistas'=>$artistas,'search'=>$query]);
    	}
    	//$artistas = Artista::all();
    	//return view('artistas.index',['artistas'=>$artistas]);
    }
    public function create(){
    	$categorias = DB::table('categorias')->get();
    	return view('artistas.create',['categorias'=>$categorias]);	
    }
    public function store(Request $request){
    	$artista = new Artista();
    	$artista->nombre_artista = request('nombre_artista');
    	$artista->descripcion_artista = request('descripcion_artista');
    	$artista->ciudad_artista = request('ciudad_artista');
    	$artista->descripcion_artista_en = request('descripcion_artista_en');
    	$artista->tecnica = request('tecnica');
    	$artista->tecnica_en = request('tecnica_en');
    	$artista->id_categoria = request('id_categoria');
    	if($request->HasFile('img_artista')){
    		$file = $request->file('img_artista');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/assets/img/',$name);
    		$artista->img_artista = $name;
    	}
    	if($request->HasFile('fondo_artista')){
    		$file = $request->file('fondo_artista');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/assets/img/',$name);
    		$artista->fondo_artista = $name;
    	}

    	$artista->save();
    	return redirect('admin/artistas');
    }
    public function show($id){
    	return view('artistas.show',['artista'=>Artista::findOrFail($id)]);
    }
    public function edit($id){
        $categorias = DB::table('categorias')->get();
		return view('artistas.edit',['artista'=>Artista::findOrFail($id),'categorias'=>$categorias]);
    }
    public function update(Request $request, $id){
    	$artista =Artista::findOrFail($id);
        $artista->nombre_artista = request('nombre_artista');
        $artista->descripcion_artista = request('descripcion_artista');
        $artista->ciudad_artista = request('ciudad_artista');
        $artista->descripcion_artista_en = request('descripcion_artista_en');
        $artista->tecnica = request('tecnica');
        $artista->tecnica_en = request('tecnica_en');
        $artista->id_categoria = request('id_categoria');
        if($request->HasFile('img_artista')){
            $file = $request->file('img_artista');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/assets/img/',$name);
            $artista->img_artista = $name;
        }
        if($request->HasFile('fondo_artista')){
            $file = $request->file('fondo_artista');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/assets/img/',$name);
            $artista->fondo_artista = $name;
        }

    	$artista->update();
    	return redirect('admin/artistas');
    }
    public function destroy($id){
    	$artista =Artista::findOrFail($id);
    	$artista->delete();
    	//	return 1;
    	//Artista::delete($id);
    	return redirect('artistas');
    }
}
