<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    /**
     * @Id
     * @Column(type="long")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $nombre;

    protected $table= "entidad";
    protected $filable= ["id", "nombre"];

    function incidente(){
        return $this->hasMany(Incidente::class, "entidad_id", "id");
    }
}
