<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vivienda
 *
 * @ORM\Table(name="vivienda")
 * @ORM\Entity
 */
class Vivienda
{
    /**
     * @var string
     *
     * @ORM\Column(name="TENENCIA", type="text", length=65535, nullable=true)
     */
    private $tenencia;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_VIVIENDA", type="text", length=65535, nullable=true)
     */
    private $tipoVivienda;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_PISOS", type="integer", nullable=true)
     */
    private $numeroPisos;

    /**
     * @var string
     *
     * @ORM\Column(name="MATERIAL_CONSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $materialConstruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_VIVIENDA", type="text", length=65535, nullable=true)
     */
    private $descripcionVivienda;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_TOTAL_CUARTOS", type="integer", nullable=true)
     */
    private $numeroTotalCuartos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DOMITORIOS", type="boolean", nullable=true)
     */
    private $domitorios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SALA", type="boolean", nullable=true)
     */
    private $sala;

    /**
     * @var boolean
     *
     * @ORM\Column(name="COMEDOR", type="boolean", nullable=true)
     */
    private $comedor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="COCINA", type="boolean", nullable=true)
     */
    private $cocina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BANIO", type="boolean", nullable=true)
     */
    private $banio;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_BANIO", type="text", length=65535, nullable=true)
     */
    private $tipoBanio;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_CAMAS", type="integer", nullable=true)
     */
    private $numeroCamas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HACINAMIENTO", type="boolean", nullable=true)
     */
    private $hacinamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_CAPACIDAD_VIVIENDA", type="text", length=65535, nullable=true)
     */
    private $descripcionCapacidadVivienda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VEHICULO_PROPIO", type="boolean", nullable=true)
     */
    private $vehiculoPropio;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_VEHICULO", type="text", length=65535, nullable=true)
     */
    private $descripcionVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_SERVICIO_AGUA", type="text", length=65535, nullable=true)
     */
    private $tipoServicioAgua;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_OTRO_SERVICIO_AGUA", type="text", length=65535, nullable=true)
     */
    private $descripcionOtroServicioAgua;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_PISO", type="text", length=65535, nullable=true)
     */
    private $tipoPiso;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_OTRO_PISO", type="text", length=65535, nullable=true)
     */
    private $descripcionOtroPiso;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_TECHO", type="text", length=65535, nullable=true)
     */
    private $tipoTecho;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_OTRO_TECHO", type="text", length=65535, nullable=true)
     */
    private $descripcionOtroTecho;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_LUZ_ELECTRICA", type="text", length=65535, nullable=true)
     */
    private $tipoLuzElectrica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ALCANTARILLADO", type="boolean", nullable=true)
     */
    private $alcantarillado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="USA_TELEFONO", type="boolean", nullable=true)
     */
    private $usaTelefono;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TVCABLE", type="boolean", nullable=true)
     */
    private $tvcable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="INTERNET", type="boolean", nullable=true)
     */
    private $internet;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_VIVIENDA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVivienda;

    /**
     * @return string
     */
    public function getTenencia()
    {
        return $this->tenencia;
    }

    /**
     * @param string $tenencia
     */
    public function setTenencia($tenencia)
    {
        $this->tenencia = $tenencia;
    }

    /**
     * @return string
     */
    public function getTipoVivienda()
    {
        return $this->tipoVivienda;
    }

    /**
     * @param string $tipoVivienda
     */
    public function setTipoVivienda($tipoVivienda)
    {
        $this->tipoVivienda = $tipoVivienda;
    }

    /**
     * @return int
     */
    public function getNumeroPisos()
    {
        return $this->numeroPisos;
    }

    /**
     * @param int $numeroPisos
     */
    public function setNumeroPisos($numeroPisos)
    {
        $this->numeroPisos = $numeroPisos;
    }

    /**
     * @return string
     */
    public function getMaterialConstruccion()
    {
        return $this->materialConstruccion;
    }

    /**
     * @param string $materialConstruccion
     */
    public function setMaterialConstruccion($materialConstruccion)
    {
        $this->materialConstruccion = $materialConstruccion;
    }

    /**
     * @return string
     */
    public function getDescripcionVivienda()
    {
        return $this->descripcionVivienda;
    }

    /**
     * @param string $descripcionVivienda
     */
    public function setDescripcionVivienda($descripcionVivienda)
    {
        $this->descripcionVivienda = $descripcionVivienda;
    }

    /**
     * @return int
     */
    public function getNumeroTotalCuartos()
    {
        return $this->numeroTotalCuartos;
    }

    /**
     * @param int $numeroTotalCuartos
     */
    public function setNumeroTotalCuartos($numeroTotalCuartos)
    {
        $this->numeroTotalCuartos = $numeroTotalCuartos;
    }

    /**
     * @return bool
     */
    public function isDomitorios()
    {
        return $this->domitorios;
    }

    /**
     * @param bool $domitorios
     */
    public function setDomitorios($domitorios)
    {
        $this->domitorios = $domitorios;
    }

    /**
     * @return bool
     */
    public function isSala()
    {
        return $this->sala;
    }

    /**
     * @param bool $sala
     */
    public function setSala($sala)
    {
        $this->sala = $sala;
    }

    /**
     * @return bool
     */
    public function isComedor()
    {
        return $this->comedor;
    }

    /**
     * @param bool $comedor
     */
    public function setComedor($comedor)
    {
        $this->comedor = $comedor;
    }

    /**
     * @return bool
     */
    public function isCocina()
    {
        return $this->cocina;
    }

    /**
     * @param bool $cocina
     */
    public function setCocina($cocina)
    {
        $this->cocina = $cocina;
    }

    /**
     * @return bool
     */
    public function isBanio()
    {
        return $this->banio;
    }

    /**
     * @param bool $banio
     */
    public function setBanio($banio)
    {
        $this->banio = $banio;
    }

    /**
     * @return string
     */
    public function getTipoBanio()
    {
        return $this->tipoBanio;
    }

    /**
     * @param string $tipoBanio
     */
    public function setTipoBanio($tipoBanio)
    {
        $this->tipoBanio = $tipoBanio;
    }

    /**
     * @return int
     */
    public function getNumeroCamas()
    {
        return $this->numeroCamas;
    }

    /**
     * @param int $numeroCamas
     */
    public function setNumeroCamas($numeroCamas)
    {
        $this->numeroCamas = $numeroCamas;
    }

    /**
     * @return bool
     */
    public function isHacinamiento()
    {
        return $this->hacinamiento;
    }

    /**
     * @param bool $hacinamiento
     */
    public function setHacinamiento($hacinamiento)
    {
        $this->hacinamiento = $hacinamiento;
    }

    /**
     * @return string
     */
    public function getDescripcionCapacidadVivienda()
    {
        return $this->descripcionCapacidadVivienda;
    }

    /**
     * @param string $descripcionCapacidadVivienda
     */
    public function setDescripcionCapacidadVivienda($descripcionCapacidadVivienda)
    {
        $this->descripcionCapacidadVivienda = $descripcionCapacidadVivienda;
    }

    /**
     * @return bool
     */
    public function isVehiculoPropio()
    {
        return $this->vehiculoPropio;
    }

    /**
     * @param bool $vehiculoPropio
     */
    public function setVehiculoPropio($vehiculoPropio)
    {
        $this->vehiculoPropio = $vehiculoPropio;
    }

    /**
     * @return string
     */
    public function getDescripcionVehiculo()
    {
        return $this->descripcionVehiculo;
    }

    /**
     * @param string $descripcionVehiculo
     */
    public function setDescripcionVehiculo($descripcionVehiculo)
    {
        $this->descripcionVehiculo = $descripcionVehiculo;
    }

    /**
     * @return string
     */
    public function getTipoServicioAgua()
    {
        return $this->tipoServicioAgua;
    }

    /**
     * @param string $tipoServicioAgua
     */
    public function setTipoServicioAgua($tipoServicioAgua)
    {
        $this->tipoServicioAgua = $tipoServicioAgua;
    }

    /**
     * @return string
     */
    public function getDescripcionOtroServicioAgua()
    {
        return $this->descripcionOtroServicioAgua;
    }

    /**
     * @param string $descripcionOtroServicioAgua
     */
    public function setDescripcionOtroServicioAgua($descripcionOtroServicioAgua)
    {
        $this->descripcionOtroServicioAgua = $descripcionOtroServicioAgua;
    }

    /**
     * @return string
     */
    public function getTipoPiso()
    {
        return $this->tipoPiso;
    }

    /**
     * @param string $tipoPiso
     */
    public function setTipoPiso($tipoPiso)
    {
        $this->tipoPiso = $tipoPiso;
    }

    /**
     * @return string
     */
    public function getDescripcionOtroPiso()
    {
        return $this->descripcionOtroPiso;
    }

    /**
     * @param string $descripcionOtroPiso
     */
    public function setDescripcionOtroPiso($descripcionOtroPiso)
    {
        $this->descripcionOtroPiso = $descripcionOtroPiso;
    }

    /**
     * @return string
     */
    public function getTipoTecho()
    {
        return $this->tipoTecho;
    }

    /**
     * @param string $tipoTecho
     */
    public function setTipoTecho($tipoTecho)
    {
        $this->tipoTecho = $tipoTecho;
    }

    /**
     * @return string
     */
    public function getDescripcionOtroTecho()
    {
        return $this->descripcionOtroTecho;
    }

    /**
     * @param string $descripcionOtroTecho
     */
    public function setDescripcionOtroTecho($descripcionOtroTecho)
    {
        $this->descripcionOtroTecho = $descripcionOtroTecho;
    }

    /**
     * @return string
     */
    public function getTipoLuzElectrica()
    {
        return $this->tipoLuzElectrica;
    }

    /**
     * @param string $tipoLuzElectrica
     */
    public function setTipoLuzElectrica($tipoLuzElectrica)
    {
        $this->tipoLuzElectrica = $tipoLuzElectrica;
    }

    /**
     * @return bool
     */
    public function isAlcantarillado()
    {
        return $this->alcantarillado;
    }

    /**
     * @param bool $alcantarillado
     */
    public function setAlcantarillado($alcantarillado)
    {
        $this->alcantarillado = $alcantarillado;
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
     * @return bool
     */
    public function isTvcable()
    {
        return $this->tvcable;
    }

    /**
     * @param bool $tvcable
     */
    public function setTvcable($tvcable)
    {
        $this->tvcable = $tvcable;
    }

    /**
     * @return bool
     */
    public function isInternet()
    {
        return $this->internet;
    }

    /**
     * @param bool $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return int
     */
    public function getIdVivienda()
    {
        return $this->idVivienda;
    }

    /**
     * @param int $idVivienda
     */
    public function setIdVivienda($idVivienda)
    {
        $this->idVivienda = $idVivienda;
    }



}
