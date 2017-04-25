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
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

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

}
