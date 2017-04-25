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
    public function getMotivoConsulta()
    {
        return $this->motivoConsulta;
    }

    /**
     * @param string $motivoConsulta
     */
    public function setMotivoConsulta($motivoConsulta)
    {
        $this->motivoConsulta = $motivoConsulta;
    }

    /**
     * @return string
     */
    public function getDiagnosticoMedico()
    {
        return $this->diagnosticoMedico;
    }

    /**
     * @param string $diagnosticoMedico
     */
    public function setDiagnosticoMedico($diagnosticoMedico)
    {
        $this->diagnosticoMedico = $diagnosticoMedico;
    }

    /**
     * @return string
     */
    public function getPrenatalMedicamentos()
    {
        return $this->prenatalMedicamentos;
    }

    /**
     * @param string $prenatalMedicamentos
     */
    public function setPrenatalMedicamentos($prenatalMedicamentos)
    {
        $this->prenatalMedicamentos = $prenatalMedicamentos;
    }

    /**
     * @return string
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /**
     * @param string $dosis
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;
    }

    /**
     * @return string
     */
    public function getProblematicaActual()
    {
        return $this->problematicaActual;
    }

    /**
     * @param string $problematicaActual
     */
    public function setProblematicaActual($problematicaActual)
    {
        $this->problematicaActual = $problematicaActual;
    }

    /**
     * @return string
     */
    public function getProtesis()
    {
        return $this->protesis;
    }

    /**
     * @param string $protesis
     */
    public function setProtesis($protesis)
    {
        $this->protesis = $protesis;
    }

    /**
     * @return string
     */
    public function getAlergias()
    {
        return $this->alergias;
    }

    /**
     * @param string $alergias
     */
    public function setAlergias($alergias)
    {
        $this->alergias = $alergias;
    }

    /**
     * @return int
     */
    public function getIdConsulta()
    {
        return $this->idConsulta;
    }

    /**
     * @param int $idConsulta
     */
    public function setIdConsulta($idConsulta)
    {
        $this->idConsulta = $idConsulta;
    }


}
