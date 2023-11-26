<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'formularios';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo', 'nroformulario', 'fecha', 'detalletrabajo', 'codigonuevo', 'nombre', 'gerencia', 'regional', 'departamento', 'fechaactual', 'usuario_id', 'cpu_id', 'monitor_id', 'teclado_id', 'raton_id', 'impresora_id', 'parlante_id', 'otrodispositivo_id'];

    public function cpu(){
        return $this->belongsTo(Cpu::class);
    }

    public function parlante(){
        return $this->belongsTo(Parlante::class);
    }

    public function raton(){
        return $this->belongsTo(Raton::class);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function impresora(){
        return $this->belongsTo(Impresora::class);
    }

    public function teclado(){
        return $this->belongsTo(Teclado::class);
    }

    public function otrodispositivo(){
        return $this->belongsTo(Otrodispositivo::class);
    }

    public function monitor(){
        return $this->belongsTo(Monitor::class);
    }

}
