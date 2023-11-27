<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
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

    protected $table= "servicio";
    protected $filable= ["id", "nombre"];

    function incidente(){
        return $this->hasMany(Incidente::class, "servicio_id", "id");
    }
}
