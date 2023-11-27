<?php
/**
 * @Entity
 */
class Usuario
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
}