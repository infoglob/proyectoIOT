<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_dispositivos extends Model
{
    protected $table = "tipos_dispositivos";//hago referencia a la tabla de la bd
    protected $primaryKey = "id_tipo_dispostivo";// PK de la tabla
    public $incrementing = true; //nosotros usamos true porque es autoincrement el id
    protected $keyType = "int";// el tipo de dato del PK
    public $timestamps = false;// Este es una variable por defecto de laravel, se usa para saber cuando se creo y modifico un dato, yo le deje en false porque creo que se usa con migrate 

    
    protected $fillables = [
    	//esta parte no me cuaerdo bien pero seria como decirle estos son los atributos de la tabla, estos se utilizan en el controlador
    	"id_tipo_dispostivo",
    	"descripcion_tipo_dispositivo"
    ];
}


//Tipos_dispositivos este esta con mayúscula y en la base de datos esta con "t" minúscula, nose si afecta?
//No en este caso porque le hacemos referencia $table=nombre_tabla_bd... ah entiendo
//voy a mirar algo en mi gprograma.. dale man mientras miro yo este que hiciste 