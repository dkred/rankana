<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //
    protected $table = 'artistas';
    protected $primaryKey ='id_artista';
    public $timestamps = false;
    protected $fillable = [
    	'nombre_artista',
    	'descripcion_artista',
    	'ciudad_artista',
    	'n_piezas',
    	'img_artista',
    	'fondo_artista',
    	'tecnica',
        'id_categoria'
    ];
    protected $guarded = [
    ];
}
