<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductoController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }
    public function index(Request $request){
    	
    	if($request){
    		$query = trim($request->get('search'));
    		$productos = Producto::where('nombre','LIKE','%'.$query.'%')
    			->orderBy('id_producto','asc')
    			->paginate(10);
    		return view('productos.index',['productos'=>$productos,'search'=>$query]);
    	}
    	//$productos = Producto::all();
    	//return view('usuarios.index',['productos'=>$productos]);
    }
    public function create(){
    	$categorias = DB::table('categorias')->get();
    	$artistas = DB::table('artistas')->get();
    	
    	return view('productos.create',['categorias'=>$categorias,'artistas'=>$artistas]);	
    }
    public function store(Request $request){
    	
    	$producto = new Producto();
    	$producto->nombre = request('nombre');
    	$producto->nombre_en = request('nombre_en');
    	$producto->precio = request('precio');
    	$producto->descripcion= request('descripcion');
    	$producto->descripcion_en = request('descripcion_en');
    	$producto->materiales = request('materiales');
    	$producto->materiales_en = request('materiales_en');
    	$producto->dimension= request('dimension');
    	$producto->peso = request('peso');
    	$producto->origen = request('origen');
    	$producto->stock = request('stock');
    	$producto->id_autor = request('id_autor');
    	$producto->id_categoria = request('id_categoria');
    	if($request->HasFile('img_producto')){
    		$file = $request->file('img_producto');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/assets/img/',$name);
    		$producto->img_producto = $name;	
    	}
    	if($request->HasFile('img_producto2')){
    		$file = $request->file('img_producto2');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/assets/img/',$name);
    		$producto->img_producto2 = $name;
    	}
    	if($request->HasFile('img_producto2')){
    		$file = $request->file('img_producto2');
    		$name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/assets/img/',$name);
    		$producto->img_producto3 = $name;
    	}
    	
    	$producto->save();

        DB::table('artistas')->where('id_artista', request('id_autor'))
            ->increment('n_piezas', request('stock'));

    	return redirect('admin/productos');
    }
    public function show($id){
    	return view('productos.show',['producto'=>Producto::findOrFail($id)]);
    }
    public function edit($id){
        $categorias = DB::table('categorias')->get();
        $artistas = DB::table('artistas')->get();
		return view('productos.edit',['producto'=>Producto::findOrFail($id),'categorias'=>$categorias,'artistas'=>$artistas]);
    }
    public function update(Request $request, $id){

    	$producto =Producto::findOrFail($id);
        $producto->nombre = request('nombre');
        $producto->nombre_en = request('nombre_en');
        $producto->precio = request('precio');
        $producto->descripcion= request('descripcion');
        $producto->descripcion_en = request('descripcion_en');
        $producto->materiales = request('materiales');
        $producto->materiales_en = request('materiales_en');
        $producto->dimension= request('dimension');
        $producto->peso = request('peso');
        $producto->origen = request('origen');
        $producto->stock = request('stock');
        $producto->id_autor = request('id_autor');
        $producto->id_categoria = request('id_categoria');
        if($request->HasFile('img_producto')){
            $file = $request->file('img_producto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/assets/img/',$name);
            $producto->img_producto = $name;    
        }
        if($request->HasFile('img_producto2')){
            $file = $request->file('img_producto2');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/assets/img/',$name);
            $producto->img_producto2 = $name;
        }
        if($request->HasFile('img_producto2')){
            $file = $request->file('img_producto2');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/assets/img/',$name);
            $producto->img_producto3 = $name;
        }
    	
    	//return $producto;
    	$producto->update();
    	return redirect('admin/productos');
    }
    public function destroy($id){
    	$producto =Producto::findOrFail($id);
    	$producto->delete();
    	//	return 1;
    	//Producto::delete($id);
    	return redirect('productos');
    }
}
