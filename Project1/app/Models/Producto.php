<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos'; //Tabla que hace referencia el Modelo

    protected $fillable = [ //Campos rellenables

    	'id',
    	'categoria',
    	'nombre',
    	'descripcion',
      'precio',
      'cantidad',
    	'imagen',
    	'activa'
    ];

    public function categoria()
    {
    	//Un producto puede pertenecer a una Categoria
    	//belongsTo(Categoria::class) relaciona con categoria_id por default
    	return $this->belongsTo(Categoria::class, 'id');
    }

    public function preguntas()
    {
    	//Un producto puede tener muchas preguntas
    	return $this->hasMany(Preguntas::class);
    }

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
