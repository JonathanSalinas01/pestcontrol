<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'id_servicio';
    public $timestamps = false; // si tu tabla no tiene created_at y updated_at

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'tarifa_base'
    ];
}
