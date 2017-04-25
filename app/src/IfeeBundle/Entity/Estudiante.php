<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante", indexes={@ORM\Index(name="FK_RELATIONSHIP_5", columns={"ID_PARROQUIA"}), @ORM\Index(name="FK_RELATIONSHIP_6", columns={"ID_CIUDAD"}), @ORM\Index(name="FK_RELATIONSHIP_7", columns={"ID_PROVINCIA"}), @ORM\Index(name="FK_RELATIONSHIP_8", columns={"ID_REGION"}), @ORM\Index(name="FK_RELATIONSHIP_9", columns={"ID_PAIS"})})
 * @ORM\Entity
 */
class Estudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="text", length=65535, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="text", length=65535, nullable=true)
     */
    private $apellidos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMICILIO", type="string", length=256, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTOR", type="string", length=100, nullable=true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMBIO_DOMICILIO", type="string", length=256, nullable=true)
     */
    private $cambioDomicilio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="USA_TELEFONO", type="boolean", nullable=true)
     */
    private $usaTelefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="RUTA_FOTO", type="string", length=256, nullable=true)
     */
    private $rutaFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="RIESGO_FAMILIAR_RESPONSABLE_DESPUES_ESCUELA", type="text", length=65535, nullable=true)
     */
    private $riesgoFamiliarResponsableDespuesEscuela;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_CARNET_CONADIS", type="bigint", nullable=true)
     */
    private $numeroCarnetConadis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CARNET_CONADIS", type="boolean", nullable=true)
     */
    private $carnetConadis;

    /**
     * @var string
     *
     * @ORM\Column(name="PORCENTAJE_DISCAPACIDAD", type="text", length=65535, nullable=true)
     */
    private $porcentajeDiscapacidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_INGRESO_IFEE", type="date", nullable=true)
     */
    private $fechaIngresoIfee;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTE_LLEGADA", type="text", length=65535, nullable=true)
     */
    private $transporteLlegada;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO_TRANSPORTE", type="integer", nullable=true)
     */
    private $telefonoTransporte;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ESTUDIANTE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstudiante;

    /**
     * @var \IfeeBundle\Entity\Pais
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAIS", referencedColumnName="ID_PAIS")
     * })
     */
    private $idPais;

    /**
     * @var \IfeeBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_REGION", referencedColumnName="ID_REGION")
     * })
     */
    private $idRegion;

    /**
     * @var \IfeeBundle\Entity\Provincia
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PROVINCIA", referencedColumnName="ID_PROVINCIA")
     * })
     */
    private $idProvincia;

    /**
     * @var \IfeeBundle\Entity\Ciudad
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIUDAD", referencedColumnName="ID_CIUDAD")
     * })
     */
    private $idCiudad;

    /**
     * @var \IfeeBundle\Entity\Parroquia
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Parroquia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PARROQUIA", referencedColumnName="ID_PARROQUIA")
     * })
     */
    private $idParroquia;


}
