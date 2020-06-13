<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $table = 'historico';
    protected $primaryKey = 'id_historico';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
    'id_historico',
    'fecha_hora_historico',
    'comandos_id_comando',
    'usuarios_id_usuario',
    'dispositivo_id_dispositivo'
    ];

    public function usuarios()
    {
      return $this->belongsTo('App\Usuario', 'usuarios_id_usuario', 'id_usuario');
    }

    public function dispositivos()
    {
      return $this->belongsTo('App\Dispositivos', 'dispositivo_id_dispositivo', 'id_dispositivo');
    }

    public function comandos()
    {
      return $this->belongsTo('App\Comando', 'comandos_id_comando', 'id_comando');
    }
}