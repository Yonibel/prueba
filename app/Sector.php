<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','condicion'];

    public function articulo(){
        return $this -> hasMany('App\Models\Articulo'); 
    }
}
