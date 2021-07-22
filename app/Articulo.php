<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = ['idcategoria','idsector','idsede','nombre','modelo','serial','descripcion'];

    public function categoria(){
        return $this -> belongsTo('App\Models\Categoria'); 
    }
    public function sector(){
        return $this -> belongsTo('App\Models\Sector'); 
    }

    public function sede(){
        return $this -> belongsTo('App\Models\Sede'); 
    }

}
