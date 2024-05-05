<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroStoreRequest extends FormRequest
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
            'marca' => ['required', 'string', 'max:255'],
            'modelo' => ['required', 'string', 'max:255'],
            'anio' => ['required', 'integer', 'min:1900', 'max:' . date('Y')],
            'precio' => ['required', 'numeric', 'min:0'],
            'descripcion' => ['nullable', 'string', 'max:1000'],
            'disponible' => ['required', 'boolean'],
            'tipo_combustible' => ['required', 'string', 'in:Gasolina,Diesel,Eléctrico,Híbrido'],
            'fecha_fabricacion' => ['required', 'date']
        ];
    }
}
