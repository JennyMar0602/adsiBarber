<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $primaryKey = "idP";
    public $timestamps = false;

    protected $fillable = ['nombreP','precioP', 'idTfk', 'idMfk'];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca', 'idM');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\Tipo', 'idT');
    }
}