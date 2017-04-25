<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrazaUser
 *
 * @ORM\Table(name="traza_user")
 * @ORM\Entity
 */
class TrazaUser
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCION", type="text", length=65535, nullable=true)
     */
    private $accion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRAZA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTraza;

    /**
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param \DateTime $fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * @return string
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * @param string $accion
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;
    }

    /**
     * @return int
     */
    public function getIdTraza()
    {
        return $this->idTraza;
    }

    /**
     * @param int $idTraza
     */
    public function setIdTraza($idTraza)
    {
        $this->idTraza = $idTraza;
    }


}
