<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    protected $table = 'transacciones';
    protected $primaryKey = "id";
    protected $fillable = [
            'fe_registro',
            'ti_registro',
            'tipo_facccionado',
            'name_user',
            'id_user',
            'identificationNac',
            'identificationNumber',
            'cellphone',
            'email',
            'reference_t',
            'cantidad',
            'totalusd',
            'totalbs',
            'tasa',
            'cantcuotas',
            'amount',
            'title',
            'description_t',
            'id_transaccion',
            'usercreated_at',
            'userupdated_at',
            'created_at',
            'updated_at',
            'status',
        ];
}

