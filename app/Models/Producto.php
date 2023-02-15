<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function cuentas(){
        return $this -> belongsToMany(Cuenta::class)
            ->withPivot('cantidad', 'precio')
            ->withTimestamps();
    }
}
