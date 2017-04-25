<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentoEstudiante
 *
 * @ORM\Table(name="documento_estudiante")
 * @ORM\Entity
 */
class DocumentoEstudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="RUTA_DOCUMENTO", type="text", length=65535, nullable=true)
     */
    private $rutaDocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_DOCUMENTO", type="text", length=65535, nullable=true)
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DOCUMENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocumento;

    /**
     * @return string
     */
    public function getRutaDocumento()
    {
        return $this->rutaDocumento;
    }

    /**
     * @param string $rutaDocumento
     */
    public function setRutaDocumento($rutaDocumento)
    {
        $this->rutaDocumento = $rutaDocumento;
    }

    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * @param string $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
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
     * @return int
     */
    public function getIdDocumento()
    {
        return $this->idDocumento;
    }

    /**
     * @param int $idDocumento
     */
    public function setIdDocumento($idDocumento)
    {
        $this->idDocumento = $idDocumento;
    }


}
