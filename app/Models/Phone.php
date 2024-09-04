<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'user_id'];

    public function user()
    {
        // En el caso de que no se sigan las siguiente convenciones
        // pk: id (Nombre columna en la tabla de la pk), 
        // fk: user_id (Nombre columna en tabla actual)
        // Hay que especificarlas de la siguiente forma
        // return $this->hasOne(Phone::class, 'user_id', 'id');
        return $this->belongsTo(User::class);
    }
}
