<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comando extends Model
{
    protected $table = 'comandos';
    protected $primaryKey = 'id_comando';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
    'id_comando',
    'descripcion_comando',
    'ruta_comando',
    'dispositivo_id_dispositivo'
    ];

    public function dispositivos()
    {
      return $this->belongsTo('App\Dispositivos', 'dispositivo_id_dispositivo', 'id_dispositivo');
    }
}
