<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $primaryKey = 'idCLiente';

    public function fichas(){
        return $this->hasMany('app\Models\Ficha');
    }
}
