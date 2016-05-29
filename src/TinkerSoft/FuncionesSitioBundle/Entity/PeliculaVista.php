<?php

namespace TinkerSoft\FuncionesSitioBundle\Entity;

/**
 * PeliculaVista
 */
class PeliculaVista
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var integer
     */
    private $idPeliculaTomatoes;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $estado = false;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return PeliculaVista
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idPeliculaTomatoes
     *
     * @param integer $idPeliculaTomatoes
     *
     * @return PeliculaVista
     */
    public function setIdPeliculaTomatoes($idPeliculaTomatoes)
    {
        $this->idPeliculaTomatoes = $idPeliculaTomatoes;

        return $this;
    }

    /**
     * Get idPeliculaTomatoes
     *
     * @return integer
     */
    public function getIdPeliculaTomatoes()
    {
        return $this->idPeliculaTomatoes;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return PeliculaVista
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return PeliculaVista
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

