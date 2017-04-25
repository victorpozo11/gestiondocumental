<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultaMedica
 *
 * @ORM\Table(name="consulta_medica")
 * @ORM\Entity
 */
class ConsultaMedica
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTIVO_CONSULTA", type="text", length=65535, nullable=true)
     */
    private $motivoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="DIAGNOSTICO_MEDICO", type="text", length=65535, nullable=true)
     */
    private $diagnosticoMedico;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_MEDICAMENTOS", type="text", length=65535, nullable=true)
     */
    private $prenatalMedicamentos;

    /**
     * @var string
     *
     * @ORM\Column(name="DOSIS", type="text", length=65535, nullable=true)
     */
    private $dosis;

    /**
     * @var string
     *
     * @ORM\Column(name="PROBLEMATICA_ACTUAL", type="text", length=65535, nullable=true)
     */
    private $problematicaActual;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTESIS", type="text", length=65535, nullable=true)
     */
    private $protesis;

    /**
     * @var string
     *
     * @ORM\Column(name="ALERGIAS", type="text", length=65535, nullable=true)
     */
    private $alergias;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONSULTA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsulta;


}
