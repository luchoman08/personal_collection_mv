<?php

namespace TinkerSoft\FuncionesSitioBundle\Entity;

/**
 * RegistroGustos
 */
class RegistroGustos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $generoid;

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
     * Set generoid
     *
     * @param integer $generoid
     *
     * @return RegistroGustos
     */
    public function setGeneroid($generoid)
    {
        $this->generoid = $generoid;

        return $this;
    }

    /**
     * Get generoid
     *
     * @return integer
     */
    public function getGeneroid()
    {
        return $this->generoid;
    }

    /**
     * Set idUsuario
     *
     * @param \TinkerSoft\FuncionesSitioBundle\Entity\Usuarios $idUsuario
     *
     * @return RegistroGustos
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

