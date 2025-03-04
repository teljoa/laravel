<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Task extends Authenticatable
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención de nombres)
    protected $table = 'tasks';

    // Campos asignables en masa (para evitar problemas con MassAssignmentException)
    protected $fillable = [
        'tasks',
        'name',
        'tasks',
        'email',
        'password'
    ];

    public $timestamps = false; // Deshabilita las marcas de tiempo

    // Ocultar ciertos atributos en respuestas JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Tipo de datos casteados automáticamente
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
