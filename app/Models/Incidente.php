<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @Entity(repositoryClass="RepoIncidente")
 */
class Incidente extends Model
{
    /**
     * @Id
     * @Column(type="long")
     * @GeneratedValue
     */
    private $id;
    /**
     * @ManyToOne(targetEntity="Servicio")
     */
    private $servicio;
    /**
     * @ManyToOne(targetEntity="Usuario")
     */
    private $usuario;
    /**
     * @Column(type="datetime")
     */
    private $fechaHoraApertura;
    /**
     * @ManyToOne(targetEntity="Entidad")
     */
    private $entidad;
    /**
     * @ManyToOne(targetEntity="Establecimiento")
     */
    private $establecimiento;
    /**
     * @Column(type="string")
     */
    private $descripcion;
    /**
     * @Column(type="datetime")
     */
    private $fechaHoraCierre;
    /**
     * @Column(type="enumType")
     */
    private $estadoIncidente;
    /**
     * @ManyToOne(targetEntity="Comunidad")
     */
    private $comunidad;

    public function comunidad(){
        return $this->belongsTo(Comunidad::class);
    }

    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }

    public function entidad(){
        return $this->belongsTo(Entidad::class);
    }

    protected $fillable = ["id", "descripcion", "estado", "fechaHoraApertura", "fechaHoraCierre", "entidad_id", "comunidad_id", "establecimiento_id", "usuario_id", "servicio_id"];
    protected $table="incidente";
}
