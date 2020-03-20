<?php

namespace rankana;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $table = 'ordenes';
    protected $primaryKey ='id';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
    	'nombre_cliente',
    	'direccion_cliente',
    	'correo_cliente',
    	'ciudad_cliente',
    	'pais_cliente',
    	'codigo_postal',
    	'celular_cliente',
    	'detalle_pedido',
    	'total_pedido',
        'estado',
        'lugar_actual',
        'latitud_actual',
        'longitud_actual',
        'tiempo_estimado'
    ];
    protected $guarded = [
    ];
}
