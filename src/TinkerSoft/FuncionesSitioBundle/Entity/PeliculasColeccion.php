<?php

namespace TinkerSoft\FuncionesSitioBundle\Entity;

/**
 * PeliculasColeccion
 */
class PeliculasColeccion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idPelicula;

    /**
     * @var \DateTime
     */
    private $fechaAdicion;

    /**
     * @var \TinkerSoft\FuncionesSitioBundle\Entity\Coleccion
     */
    private $idColeccion;


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
     * Set idPelicula
     *
     * @param integer $idPelicula
     *
     * @return PeliculasColeccion
     */
    public function setIdPelicula($idPelicula)
    {
        $this->idPelicula = $idPelicula;

        return $this;
    }

    /**
     * Get idPelicula
     *
     * @return integer
     */
    public function getIdPelicula()
    {
        return $this->idPelicula;
    }

    /**
     * Set fechaAdicion
     *
     * @param \DateTime $fechaAdicion
     *
     * @return PeliculasColeccion
     */
    public function setFechaAdicion($fechaAdicion)
    {
        $this->fechaAdicion = $fechaAdicion;

        return $this;
    }

    /**
     * Get fechaAdicion
     *
     * @return \DateTime
     */
    public function getFechaAdicion()
    {
        return $this->fechaAdicion;
    }

    /**
     * Set idColeccion
     *
     * @param \TinkerSoft\FuncionesSitioBundle\Entity\Coleccion $idColeccion
     *
     * @return PeliculasColeccion
     */
    public function setIdColeccion(\TinkerSoft\FuncionesSitioBundle\Entity\Coleccion $idColeccion = null)
    {
        $this->idColeccion = $idColeccion;

        return $this;
    }

    /**
     * Get idColeccion
     *
     * @return \TinkerSoft\FuncionesSitioBundle\Entity\Coleccion
     */
    public function getIdColeccion()
    {
        return $this->idColeccion;
    }
}

