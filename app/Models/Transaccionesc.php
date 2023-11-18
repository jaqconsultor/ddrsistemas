<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaccionesc extends Model
{
    protected $table = 'transacciones_cuotas';
    protected $primaryKey = "id";
    protected $fillable = [
            'nro_cuota',
            'totalusd',
            'totalbs',
            'tasa',
            'usercreated_at',
            'userupdated_at',
            'created_at',
            'updated_at',
            'status',
            'id_trans',
            'fe_cuota'
        ];
}

