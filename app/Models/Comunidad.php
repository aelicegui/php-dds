<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
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
    /**
     * @OneToMany(targetEntity="Incidente", mappedBy="comunidad")
     */
    private $incidentes = array();

    protected $fillable = ["id", "nombre"];

    public function incidentes(){
        return $this->hasMany(Incidente::class, "comunidad_id","id");
    }

    function getIncidentes(){
        return $this->incidentes;
    }

    protected $table='comunidad';

}
