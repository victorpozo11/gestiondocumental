<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_GIROS", type="text", length=65535, nullable=true)
     */
    private $motorGiros;

    /**
     * @var string
     *
     * @ORM\Column(name="ROL", type="text", length=65535, nullable=true)
     */
    private $rol;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ROLE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="IfeeBundle\Entity\Usuario", mappedBy="idRole")
     */
    private $idUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUsuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return string
     */
    public function getMotorGiros()
    {
        return $this->motorGiros;
    }

    /**
     * @param string $motorGiros
     */
    public function setMotorGiros($motorGiros)
    {
        $this->motorGiros = $motorGiros;
    }

    /**
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param string $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    /**
     * @return int
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param int $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


}
