<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false; // si tu tabla no tiene created_at y updated_at

    protected $fillable = [
        'nombre',
        'email',
        'direccion',
        'telefono',
        'usuario',
        'password'
    ];
}
