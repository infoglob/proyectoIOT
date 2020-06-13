<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
    'id_usuario',
    'nombre',
    'apellido',
    'nro_doc',
    'usuario',
    'password'
    ];

    public function dispositivos()
    {
      return $this->belongsToMany('App\Dispositivos', 'panel_control', 'usuarios_id_usuario', 'dispositivo_id_dispositivo');
    }

    public function permisos()
    {
      return $this->belongsToMany('App\Permiso', 'usuarios_x_permisos', 'usuarios_id_usuario', 'permisos_id_permiso');
    }
}
