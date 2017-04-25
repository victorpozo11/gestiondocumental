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

    /**
     * @return string
     */
    public function getEnfermedadesGraves()
    {
        return $this->enfermedadesGraves;
    }

    /**
     * @param string $enfermedadesGraves
     */
    public function setEnfermedadesGraves($enfermedadesGraves)
    {
        $this->enfermedadesGraves = $enfermedadesGraves;
    }

    /**
     * @return string
     */
    public function getPostnatalAccidentes()
    {
        return $this->postnatalAccidentes;
    }

    /**
     * @param string $postnatalAccidentes
     */
    public function setPostnatalAccidentes($postnatalAccidentes)
    {
        $this->postnatalAccidentes = $postnatalAccidentes;
    }

    /**
     * @return bool
     */
    public function isCompletoVacunas()
    {
        return $this->completoVacunas;
    }

    /**
     * @param bool $completoVacunas
     */
    public function setCompletoVacunas($completoVacunas)
    {
        $this->completoVacunas = $completoVacunas;
    }

    /**
     * @return bool
     */
    public function isTomaMedicamentos()
    {
        return $this->tomaMedicamentos;
    }

    /**
     * @param bool $tomaMedicamentos
     */
    public function setTomaMedicamentos($tomaMedicamentos)
    {
        $this->tomaMedicamentos = $tomaMedicamentos;
    }

    /**
     * @return string
     */
    public function getVacunaFaltante()
    {
        return $this->vacunaFaltante;
    }

    /**
     * @param string $vacunaFaltante
     */
    public function setVacunaFaltante($vacunaFaltante)
    {
        $this->vacunaFaltante = $vacunaFaltante;
    }

    /**
     * @return bool
     */
    public function isDesconoceTomaMedicamento()
    {
        return $this->desconoceTomaMedicamento;
    }

    /**
     * @param bool $desconoceTomaMedicamento
     */
    public function setDesconoceTomaMedicamento($desconoceTomaMedicamento)
    {
        $this->desconoceTomaMedicamento = $desconoceTomaMedicamento;
    }

    /**
     * @return string
     */
    public function getNombreMedicamento()
    {
        return $this->nombreMedicamento;
    }

    /**
     * @param string $nombreMedicamento
     */
    public function setNombreMedicamento($nombreMedicamento)
    {
        $this->nombreMedicamento = $nombreMedicamento;
    }

    /**
     * @return string
     */
    public function getHospitalAtendido()
    {
        return $this->hospitalAtendido;
    }

    /**
     * @param string $hospitalAtendido
     */
    public function setHospitalAtendido($hospitalAtendido)
    {
        $this->hospitalAtendido = $hospitalAtendido;
    }

    /**
     * @return string
     */
    public function getMedicoTratante()
    {
        return $this->medicoTratante;
    }

    /**
     * @param string $medicoTratante
     */
    public function setMedicoTratante($medicoTratante)
    {
        $this->medicoTratante = $medicoTratante;
    }

    /**
     * @return int
     */
    public function getIdSalud()
    {
        return $this->idSalud;
    }

    /**
     * @param int $idSalud
     */
    public function setIdSalud($idSalud)
    {
        $this->idSalud = $idSalud;
    }


}
