<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cpus';

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
    protected $fillable = ['codigo', 'marca', 'modelo', 'procesador', 'ram', 'hdd', 'cd', 'dvd', 'floppy', 'serie'];

    public function programas(){
        return $this->hasMany(Programa::class);
    }

    public function formularios(){
        return $this->hasMany(Formulario::class);
    }

}
