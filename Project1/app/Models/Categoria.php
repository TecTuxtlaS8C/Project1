<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias'; //Tabla que hace referencia el Modelo

    protected $primaryKey = 'id'; //Atributo primaryKey de la tabla categoria

    protected $fillable = [

    	'nombre',
    	'descripcion',
    	'activa'

    ];

    // protected $guarded = [];

    public function productos()
    {
    	//Una Categoria puede tener muchos productos
    	return $this->hasMany(Producto::class);
    }



    public function scopeNombres($query, $nombres) {
    	if ($nombres) 
        {
    		return $query->where('nombre','like',"%$nombres%");
    	}

    }
}
