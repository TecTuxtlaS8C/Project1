<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function scopeNombres($query, $nombres) {
    	if ($nombres) 
        {
    		return $query->where('nombre','like',"%$nombres%");
    	}

    }
    public function scopeCategoria($query, $categoria) {
    	if ($categoria) 
        {
    		return $query->where('categoria','like',"%$categoria%");
    	}

    }
}
