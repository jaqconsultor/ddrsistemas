<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaccionesd extends Model
{
    protected $table = 'transacciones_details';
    protected $primaryKey = "id";
    protected $fillable = [
        'name_producto',
        'slug_producto',
        'id_item',
        'cantidad',
        'totalusd',
        'totalbs',
        'tasa',
        'usercreated_at',
        'userupdated_at',
        'created_at',
        'updated_at',
        'status',
        'id_trans',
        ];
}

