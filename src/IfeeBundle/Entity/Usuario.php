<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="FK_RELATIONSHIP_10", columns={"ID_SEXO"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", length=65535, nullable=true)
     */
    private $direccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="USA_TELEFONO", type="boolean", nullable=true)
     */
    private $usaTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="text", length=65535, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="text", length=65535, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="SALT", type="text", length=65535, nullable=true)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ISLDAP", type="boolean", nullable=true)
     */
    private $isldap;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_ESTADOS", type="text", length=65535, nullable=true)
     */
    private $dientesEstados;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_EXPIRACION", type="date", nullable=true)
     */
    private $fechaExpiracion;

    /**
     * @var string
     *
     * @ORM\Column(name="RUTA_FOTO", type="string", length=256, nullable=true)
     */
    private $rutaFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCION", type="text", length=65535, nullable=true)
     */
    private $accion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var \IfeeBundle\Entity\Sexo
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Sexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SEXO", referencedColumnName="ID_SEXO")
     * })
     */
    private $idSexo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="IfeeBundle\Entity\Role", inversedBy="idUsuario")
     * @ORM\JoinTable(name="usuario_role",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_USUARIO", referencedColumnName="ID_USUARIO")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_ROLE", referencedColumnName="ID_ROLE")
     *   }
     * )
     */
    private $idRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRole = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param int $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return bool
     */
    public function isUsaTelefono()
    {
        return $this->usaTelefono;
    }

    /**
     * @param bool $usaTelefono
     */
    public function setUsaTelefono($usaTelefono)
    {
        $this->usaTelefono = $usaTelefono;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return bool
     */
    public function isIsldap()
    {
        return $this->isldap;
    }

    /**
     * @param bool $isldap
     */
    public function setIsldap($isldap)
    {
        $this->isldap = $isldap;
    }

    /**
     * @return string
     */
    public function getDientesEstados()
    {
        return $this->dientesEstados;
    }

    /**
     * @param string $dientesEstados
     */
    public function setDientesEstados($dientesEstados)
    {
        $this->dientesEstados = $dientesEstados;
    }

    /**
     * @return \DateTime
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * @param \DateTime $fechaExpiracion
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;
    }

    /**
     * @return string
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * @param string $rutaFoto
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;
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
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param int $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return Sexo
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * @param Sexo $idSexo
     */
    public function setIdSexo($idSexo)
    {
        $this->idSexo = $idSexo;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }



}
