<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad
 *
 * @ORM\Table(name="entidad")
 * @ORM\Entity
 */
class Entidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="RAZON_SOCIAL", type="text", length=65535, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CORTO", type="text", length=65535, nullable=true)
     */
    private $nombreCorto;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", length=65535, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="text", length=65535, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="RUC", type="text", length=65535, nullable=true)
     */
    private $ruc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="RUTA_LOGO", type="text", length=65535, nullable=true)
     */
    private $rutaLogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ENTIDAD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntidad;

    /**
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * @param string $razonSocial
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    /**
     * @return string
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * @param string $nombreCorto
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;
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

    /**
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return string
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * @param string $ruc
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;
    }

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
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return string
     */
    public function getRutaLogo()
    {
        return $this->rutaLogo;
    }

    /**
     * @param string $rutaLogo
     */
    public function setRutaLogo($rutaLogo)
    {
        $this->rutaLogo = $rutaLogo;
    }

    /**
     * @return int
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * @param int $idEntidad
     */
    public function setIdEntidad($idEntidad)
    {
        $this->idEntidad = $idEntidad;
    }


}
