<?php

namespace TinkerSoft\UsuariosBundle\Entity;

/**
 * Valoracionpeliculas
 */
class Valoracionpeliculas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idPeliculaTomatoes;

    /**
     * @var integer
     */
    private $valoracion;

    /**
     * @var \DateTime
     */
    private $fechaValoracion;

    /**
     * @var \TinkerSoft\UsuariosBundle\Entity\Usuarios
     */
    private $idUsuarioCalifica;


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
     * Set idPeliculaTomatoes
     *
     * @param integer $idPeliculaTomatoes
     *
     * @return Valoracionpeliculas
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
     * Set valoracion
     *
     * @param integer $valoracion
     *
     * @return Valoracionpeliculas
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return integer
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
     * @return Valoracionpeliculas
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
     * Set idUsuarioCalifica
     *
     * @param \TinkerSoft\UsuariosBundle\Entity\Usuarios $idUsuarioCalifica
     *
     * @return Valoracionpeliculas
     */
    public function setIdUsuarioCalifica(\TinkerSoft\UsuariosBundle\Entity\Usuarios $idUsuarioCalifica = null)
    {
        $this->idUsuarioCalifica = $idUsuarioCalifica;

        return $this;
    }

    /**
     * Get idUsuarioCalifica
     *
     * @return \TinkerSoft\UsuariosBundle\Entity\Usuarios
     */
    public function getIdUsuarioCalifica()
    {
        return $this->idUsuarioCalifica;
    }
}

