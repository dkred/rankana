<?php

namespace rankana;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';	
    protected $primaryKey ='id_categoria';
    public $timestamps = false;
    protected $fillable = [
    	'nombre_categoria'
    ];
    protected $guarded = [
    ];
}
