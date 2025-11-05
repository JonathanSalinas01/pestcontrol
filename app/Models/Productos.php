<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false; // si tu tabla no tiene created_at y updated_at

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen'
    ];
}
