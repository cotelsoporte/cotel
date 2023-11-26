<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'monitors';

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
    protected $fillable = ['codigo', 'marca', 'modelo', 'serie', 'tamaño', 'tipo'];

    public function formularios(){
        return $this->hasMany(Formulario::class);
    }

}
