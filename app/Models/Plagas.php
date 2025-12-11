<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plagas extends Model
{
    protected $table = 'plagas';
    protected $primaryKey = 'id_plaga';
    public $timestamps = false; // si tu tabla no tiene created_at y updated_at

    protected $fillable = [
        'plaga'
    ];
}
