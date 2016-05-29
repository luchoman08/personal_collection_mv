<?php

namespace TinkerSoft\FuncionesSitioBundle\Entity;

/**
 * ValoracionPeliculas
 */
class ValoracionPeliculas
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
     * @var float
     */
    private $valoracion;

    /**
     * @var \DateTime
     */
    private $fechaValoracion;

    /**
     * @var \TinkerSoft\FuncionesSitioBundle\Entity\Usuarios
     */
    private $idUsuario;


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
     * @return ValoracionPeliculas
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
     * Set valoracion
     *
     * @param float $valoracion
     *
     * @return ValoracionPeliculas
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return float
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }

    /**
     * Set fechaValoracion
     *
     * @param \DateTime $fechaValoracion
     *
     * @return ValoracionPeliculas
     */
    public function setFechaValoracion($fechaValoracion)
    {
        $this->fechaValoracion = $fechaValoracion;

        return $this;
    }

    /**
     * Get fechaValoracion
     *
     * @return \DateTime
     */
    public function getFechaValoracion()
    {
        return $this->fechaValoracion;
    }

    /**
     * Set idUsuario
     *
     * @param \TinkerSoft\FuncionesSitioBundle\Entity\Usuarios $idUsuario
     *
     * @return ValoracionPeliculas
     */
    public function setIdUsuario(\TinkerSoft\FuncionesSitioBundle\Entity\Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \TinkerSoft\FuncionesSitioBundle\Entity\Usuarios
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}

