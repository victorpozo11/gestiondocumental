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

    /**
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
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
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * @param string $domicilio
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    /**
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * @param string $sector
     */
    public function setSector($sector)
    {
        $this->sector = $sector;
    }

    /**
     * @return string
     */
    public function getCambioDomicilio()
    {
        return $this->cambioDomicilio;
    }

    /**
     * @param string $cambioDomicilio
     */
    public function setCambioDomicilio($cambioDomicilio)
    {
        $this->cambioDomicilio = $cambioDomicilio;
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
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
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
    public function getRiesgoFamiliarResponsableDespuesEscuela()
    {
        return $this->riesgoFamiliarResponsableDespuesEscuela;
    }

    /**
     * @param string $riesgoFamiliarResponsableDespuesEscuela
     */
    public function setRiesgoFamiliarResponsableDespuesEscuela($riesgoFamiliarResponsableDespuesEscuela)
    {
        $this->riesgoFamiliarResponsableDespuesEscuela = $riesgoFamiliarResponsableDespuesEscuela;
    }

    /**
     * @return int
     */
    public function getNumeroCarnetConadis()
    {
        return $this->numeroCarnetConadis;
    }

    /**
     * @param int $numeroCarnetConadis
     */
    public function setNumeroCarnetConadis($numeroCarnetConadis)
    {
        $this->numeroCarnetConadis = $numeroCarnetConadis;
    }

    /**
     * @return bool
     */
    public function isCarnetConadis()
    {
        return $this->carnetConadis;
    }

    /**
     * @param bool $carnetConadis
     */
    public function setCarnetConadis($carnetConadis)
    {
        $this->carnetConadis = $carnetConadis;
    }

    /**
     * @return string
     */
    public function getPorcentajeDiscapacidad()
    {
        return $this->porcentajeDiscapacidad;
    }

    /**
     * @param string $porcentajeDiscapacidad
     */
    public function setPorcentajeDiscapacidad($porcentajeDiscapacidad)
    {
        $this->porcentajeDiscapacidad = $porcentajeDiscapacidad;
    }

    /**
     * @return \DateTime
     */
    public function getFechaIngresoIfee()
    {
        return $this->fechaIngresoIfee;
    }

    /**
     * @param \DateTime $fechaIngresoIfee
     */
    public function setFechaIngresoIfee($fechaIngresoIfee)
    {
        $this->fechaIngresoIfee = $fechaIngresoIfee;
    }

    /**
     * @return string
     */
    public function getTransporteLlegada()
    {
        return $this->transporteLlegada;
    }

    /**
     * @param string $transporteLlegada
     */
    public function setTransporteLlegada($transporteLlegada)
    {
        $this->transporteLlegada = $transporteLlegada;
    }

    /**
     * @return int
     */
    public function getTelefonoTransporte()
    {
        return $this->telefonoTransporte;
    }

    /**
     * @param int $telefonoTransporte
     */
    public function setTelefonoTransporte($telefonoTransporte)
    {
        $this->telefonoTransporte = $telefonoTransporte;
    }

    /**
     * @return int
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }

    /**
     * @param int $idEstudiante
     */
    public function setIdEstudiante($idEstudiante)
    {
        $this->idEstudiante = $idEstudiante;
    }

    /**
     * @return Pais
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * @param Pais $idPais
     */
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    }

    /**
     * @return Region
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * @param Region $idRegion
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    }

    /**
     * @return Provincia
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * @param Provincia $idProvincia
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;
    }

    /**
     * @return Ciudad
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * @param Ciudad $idCiudad
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;
    }

    /**
     * @return Parroquia
     */
    public function getIdParroquia()
    {
        return $this->idParroquia;
    }

    /**
     * @param Parroquia $idParroquia
     */
    public function setIdParroquia($idParroquia)
    {
        $this->idParroquia = $idParroquia;
    }

    public function __toString()
    {
        return $this->getApellidos()." ".$this->getNombres();
    }

    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }


}
