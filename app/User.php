<?php

namespace SeniorControl;

use Illuminate\Database\Eloquent\Model;

class User extends Model    
{
    //especifica campos a llenar para evitar ataques
     protected $fillable = ['nombre', 'apellido', 'correo','pass','telefono'];
    // protected $primaryKey = 'flight_id';
    
    
/************+MUTADORES*************************/
    public function setNombreAttribute($value)
{
    $this->attributes['nombre'] = ucfirst(strtolower($value));
}
    
    public function setApellidoAttribute($value)
{
    $this->attributes['apellido'] = ucfirst(strtolower($value));
}
    
    public function setPassAttribute($value)
{
    $this->attributes['pass'] = bcrypt($value);
}
    
}


