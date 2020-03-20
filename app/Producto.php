<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $primaryKey ='id_producto';
    public $timestamps = false;
    protected $fillable = [
    	'nombre',
        'nombre_en',
    	'precio',
    	'descripcion',
        'descripcion_en',
        'materiales',
    	'dimension',
    	'peso',
    	'origen',
    	'stock',
    	'img_producto',
    	'id_autor',
        'id_categoria'
    ];
    protected $guarded = [
    ];
}
