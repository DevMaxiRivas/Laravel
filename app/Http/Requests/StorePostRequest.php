<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aceptara a todos los usuarios
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => "required|unique:posts",
            'content' => 'required',
            'category' => 'required'
        ];
    }

    // Metodo que permite definir mensajes personalizados para
    // el incumplimiento de las reglas de validacion
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'El campo :attribute es obligatorio',
    //         'title.min' => 'El campo :attribute debe tener al menos 5 caracteres',
    //         'title.max' => 'El campo :attribute debe tener maximo 255 caracteres',
    //         'slug.required' => 'El campo :attribute es obligatorio',
    //         'slug.unique' => 'El campo :attribute debe ser unico',
    //         'content.required' => 'El campo :attribute es obligatorio'
    //     ];
    // }

    // Metodo que permite definir atributos personalizados para
    // el incumplimiento de las reglas de validacion
    // Para que se apliquen estos nombres para los atributos si se define
    // Textos en el metodo message hay que definirlos de la siguiente manera
    // The :atribute field is required
    // public function attributes()
    // {
    //     return [
    //         'title' => 'titulo',
    //         'content' => 'Contenido'
    //     ];
    // }
}