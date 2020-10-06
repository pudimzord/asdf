<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $primaryKey = 'idFicha';

    public function ficha(){
        return $this->belongsTo('app\Models\Cliente', 'idCliente');
    }
}
