<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programas';

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
    protected $fillable = ['outlook', 'word', 'exce', 'so', 'antivirus', 'internet', 'correo', 'otrosprogramas', 'nombreequipo', 'direccionip', 'cpu_id'];

    public function cpu(){
        return $this->belongsTo(Cpu::class);
    }

}
