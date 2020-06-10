<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    protected $table = 'dispositivo';
    protected $primaryKey = 'id_dispositivo';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;


    protected $fillable = [
	    'id_dispositivo ',
	    'descripcion_dispositivo',
	    'ip',
	    'mac',
	    'tipos_dispositivos_id_tipo_dispostivo'
    ];


    public function tipoDeDispositivos()
    {
      return $this->belongsTo('App\Tipos_dispositivos', 'tipos_dispositivos_id_tipo_dispostivo', 'id_tipo_dispostivo');
    }

}
