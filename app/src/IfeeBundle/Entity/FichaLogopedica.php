<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaLogopedica
 *
 * @ORM\Table(name="ficha_logopedica")
 * @ORM\Entity
 */
class FichaLogopedica
{
    /**
     * @var string
     *
     * @ORM\Column(name="MOTIVO_CONSULTA", type="text", length=65535, nullable=true)
     */
    private $motivoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA_VOZ", type="text", length=65535, nullable=true)
     */
    private $caracteristicaVoz;

    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA_RESPIRACION", type="text", length=65535, nullable=true)
     */
    private $caracteristicaRespiracion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESPITAJE_AUDICION", type="text", length=65535, nullable=true)
     */
    private $despitajeAudicion;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPRESION_DIAGNOSTICA", type="text", length=65535, nullable=true)
     */
    private $impresionDiagnostica;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="RECOMENDACIONES", type="text", length=65535, nullable=true)
     */
    private $recomendaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LOGOPEDICA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogopedica;


}
