<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'marca' => ['sometimes', 'string', 'max:255'],
            'modelo' => ['sometimes', 'string', 'max:255'],
            'anio' => ['sometimes', 'integer', 'min:1900', 'max:' . date('Y')],
            'precio' => ['sometimes', 'numeric', 'min:0'],
            'descripcion' => ['nullable', 'string', 'max:1000'],
            'disponible' => ['sometimes', 'boolean'],
            'tipo_combustible' => ['sometimes', 'string', 'in:Gasolina,Diesel,Eléctrico,Híbrido'],
            'fecha_fabricacion' => ['sometimes', 'date'],
            'categoria_id' => 'exists:categorias,id',
        ];
    }
}
