<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavetasksRequest extends FormRequest
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
        // Verificar si estamos actualizando o creando
        $rules = [
            'tasks' => 'required|string|min:3|max:20|unique:tasks,username,' . ($this->route('task') ? $this->route('task') : ''),
            'name' => 'required|string|max:50',
            'tasks' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:tasks,email,' . ($this->route('task') ? $this->route('task') : '')
        ];

        // Hacer el password obligatorio solo para la creación (si es una actualización, se permite nulo)
        if (!$this->route('task')) {
            // Si no es una actualización, el password es obligatorio
            $rules['password'] = 'required|string|min:8';
        } else {
            // Si es una actualización, el password es opcional
            $rules['password'] = 'nullable|string|min:8';
        }

        return $rules;
    }
}
