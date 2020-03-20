<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = 'pedidos';
    protected $primaryKey ='id';
    public $timestamps = false;
    protected $fillable = [
    	'nombre',
    	'celular',
    	'correo',
    	'pedido'
    ];
    protected $guarded = [
    ];
}
