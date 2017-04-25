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


}
