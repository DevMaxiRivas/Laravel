<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Si el nombre del modelo no coincide con el de la base de datos
    // en minuscula y en singular hay que especificar la tabla
    // O nombras la tabla en otro idioma que no sea ingles
    // protected $table = 'posts';}
    // Si coincide no hace falta especificar la tabla

    // Si esta en ingles, caso particular
    // BD categories -> Laravel Category

    // Mutadores y Accesores

    protected function title(): Attribute
    {
        return Attribute::make(
            // Mutador: Modifica el valor a guardar en la BD
            // Notacion de funcion con flecha
            set: fn($value) => strtolower($value),
            // Accesor: Modifica el valor del objeto a mostrar de la BD
            // Notacion de funcion comun
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }


    // Casting de atributos
    // Laravel cuando obtiene los datos de la base de datos los convierte en Strings
    // Por ello es necesario realizarles un casteo si se necesita usarlos
    // El casteo aplica tanto para el guardado y para la creacion en la BD 
    protected $casts = [
        'published_at' => 'datetime'
    ];
}
