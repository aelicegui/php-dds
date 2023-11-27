<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
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

    protected $table= "establecimiento";
    protected $filable= ["id", "nombre"];

    function incidente(){
        return $this->hasMany(Incidente::class, "establecimiento_id", "id");
    }
}
