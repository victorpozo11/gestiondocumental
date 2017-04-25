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


}
