<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otrodispositivo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'otrodispositivos';

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
    protected $fillable = ['codigo', 'dispositivo', 'marca', 'modelo', 'serie', 'tipo'];

    public function formularios(){
        return $this->hasMany(Formulario::class);
    }

}
