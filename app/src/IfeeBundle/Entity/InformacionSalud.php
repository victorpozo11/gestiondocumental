<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionSalud
 *
 * @ORM\Table(name="informacion_salud")
 * @ORM\Entity
 */
class InformacionSalud
{
    /**
     * @var string
     *
     * @ORM\Column(name="ENFERMEDADES_GRAVES", type="text", length=65535, nullable=true)
     */
    private $enfermedadesGraves;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_ACCIDENTES", type="text", length=65535, nullable=true)
     */
    private $postnatalAccidentes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="COMPLETO_VACUNAS", type="boolean", nullable=true)
     */
    private $completoVacunas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TOMA_MEDICAMENTOS", type="boolean", nullable=true)
     */
    private $tomaMedicamentos;

    /**
     * @var string
     *
     * @ORM\Column(name="VACUNA_FALTANTE", type="text", length=65535, nullable=true)
     */
    private $vacunaFaltante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DESCONOCE_TOMA_MEDICAMENTO", type="boolean", nullable=true)
     */
    private $desconoceTomaMedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_MEDICAMENTO", type="text", length=65535, nullable=true)
     */
    private $nombreMedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="HOSPITAL_ATENDIDO", type="text", length=65535, nullable=true)
     */
    private $hospitalAtendido;

    /**
     * @var string
     *
     * @ORM\Column(name="MEDICO_TRATANTE", type="text", length=65535, nullable=true)
     */
    private $medicoTratante;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SALUD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalud;


}
