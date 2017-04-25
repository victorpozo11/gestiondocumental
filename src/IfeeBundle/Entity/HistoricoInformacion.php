<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoInformacion
 *
 * @ORM\Table(name="historico_informacion", indexes={@ORM\Index(name="FK_RELATIONSHIP_12", columns={"ID_ESTUDIANTE"}), @ORM\Index(name="FK_RELATIONSHIP_13", columns={"ID_PSICOLOGIA2"}), @ORM\Index(name="FK_RELATIONSHIP_14", columns={"ID_VIVIENDA"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"ID_SALUD"}), @ORM\Index(name="FK_RELATIONSHIP_16", columns={"ID_EGRESOS"}), @ORM\Index(name="FK_RELATIONSHIP_17", columns={"ID_INGRESOS"}), @ORM\Index(name="FK_RELATIONSHIP_18", columns={"ID_DESARROLLO_MOTOR"}), @ORM\Index(name="FK_RELATIONSHIP_19", columns={"ID_LOGOPEDICA"}), @ORM\Index(name="FK_RELATIONSHIP_21", columns={"ID_ANTECEDENTES_PATOLOGICOS"}), @ORM\Index(name="FK_RELATIONSHIP_22", columns={"ID_ESTRUCTURA_Y_FUNCION_ORAL"}), @ORM\Index(name="FK_RELATIONSHIP_23", columns={"ID_APRENDIZAJE"}), @ORM\Index(name="FK_RELATIONSHIP_24", columns={"ID_HISTORIAL"}), @ORM\Index(name="FK_RELATIONSHIP_25", columns={"ID_HABILIDAD"}), @ORM\Index(name="FK_RELATIONSHIP_26", columns={"ID_MOTRICIDAD"}), @ORM\Index(name="FK_RELATIONSHIP_27", columns={"ID_CONDUCTA"}), @ORM\Index(name="FK_RELATIONSHIP_28", columns={"ID_CONVIVE"}), @ORM\Index(name="FK_RELATIONSHIP_29", columns={"ID_SEGUIMIENTO"}), @ORM\Index(name="FK_RELATIONSHIP_31", columns={"ID_CONSULTA"})})
 * @ORM\Entity
 */
class HistoricoInformacion
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
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORICO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistorico;

    /**
     * @var \IfeeBundle\Entity\Habilidades
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Habilidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_HABILIDAD", referencedColumnName="ID_HABILIDAD")
     * })
     */
    private $idHabilidad;

    /**
     * @var \IfeeBundle\Entity\HistorialEducativo
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\HistorialEducativo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_HISTORIAL", referencedColumnName="ID_HISTORIAL")
     * })
     */
    private $idHistorial;

    /**
     * @var \IfeeBundle\Entity\AprendizajeBasico
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\AprendizajeBasico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_APRENDIZAJE", referencedColumnName="ID_APRENDIZAJE")
     * })
     */
    private $idAprendizaje;

    /**
     * @var \IfeeBundle\Entity\Motricidad
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Motricidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MOTRICIDAD", referencedColumnName="ID_MOTRICIDAD")
     * })
     */
    private $idMotricidad;

    /**
     * @var \IfeeBundle\Entity\Conducta
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Conducta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONDUCTA", referencedColumnName="ID_CONDUCTA")
     * })
     */
    private $idConducta;

    /**
     * @var \IfeeBundle\Entity\ConsultaMedica
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\ConsultaMedica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONSULTA", referencedColumnName="ID_CONSULTA")
     * })
     */
    private $idConsulta;

    /**
     * @var \IfeeBundle\Entity\SeguimientoEstudiante
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\SeguimientoEstudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SEGUIMIENTO", referencedColumnName="ID_SEGUIMIENTO")
     * })
     */
    private $idSeguimiento;

    /**
     * @var \IfeeBundle\Entity\EstructuraFamiliar
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\EstructuraFamiliar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONVIVE", referencedColumnName="ID_CONVIVE")
     * })
     */
    private $idConvive;

    /**
     * @var \IfeeBundle\Entity\EstructuraYFuncionOral
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\EstructuraYFuncionOral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ESTRUCTURA_Y_FUNCION_ORAL", referencedColumnName="ID_ESTRUCTURA_Y_FUNCION_ORAL")
     * })
     */
    private $idEstructuraYFuncionOral;

    /**
     * @var \IfeeBundle\Entity\AntecedentesPatologicos
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\AntecedentesPatologicos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ANTECEDENTES_PATOLOGICOS", referencedColumnName="ID_ANTECEDENTES_PATOLOGICOS")
     * })
     */
    private $idAntecedentesPatologicos;

    /**
     * @var \IfeeBundle\Entity\InformacionSalud
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\InformacionSalud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SALUD", referencedColumnName="ID_SALUD")
     * })
     */
    private $idSalud;

    /**
     * @var \IfeeBundle\Entity\Vivienda
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Vivienda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_VIVIENDA", referencedColumnName="ID_VIVIENDA")
     * })
     */
    private $idVivienda;

    /**
     * @var \IfeeBundle\Entity\HistorialDesarrolloSocioafectivo
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\HistorialDesarrolloSocioafectivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PSICOLOGIA2", referencedColumnName="ID_PSICOLOGIA2")
     * })
     */
    private $idPsicologia2;

    /**
     * @var \IfeeBundle\Entity\EgresosSituacionEconomica
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\EgresosSituacionEconomica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EGRESOS", referencedColumnName="ID_EGRESOS")
     * })
     */
    private $idEgresos;

    /**
     * @var \IfeeBundle\Entity\IngresosSituacionEconomica
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\IngresosSituacionEconomica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_INGRESOS", referencedColumnName="ID_INGRESOS")
     * })
     */
    private $idIngresos;

    /**
     * @var \IfeeBundle\Entity\FichaLogopedica
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\FichaLogopedica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LOGOPEDICA", referencedColumnName="ID_LOGOPEDICA")
     * })
     */
    private $idLogopedica;

    /**
     * @var \IfeeBundle\Entity\DesarrolloMotorYLenguaje
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\DesarrolloMotorYLenguaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DESARROLLO_MOTOR", referencedColumnName="ID_DESARROLLO_MOTOR")
     * })
     */
    private $idDesarrolloMotor;

    /**
     * @var \IfeeBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ESTUDIANTE", referencedColumnName="ID_ESTUDIANTE")
     * })
     */
    private $idEstudiante;

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
    public function getIdHistorico()
    {
        return $this->idHistorico;
    }

    /**
     * @param int $idHistorico
     */
    public function setIdHistorico($idHistorico)
    {
        $this->idHistorico = $idHistorico;
    }

    /**
     * @return Habilidades
     */
    public function getIdHabilidad()
    {
        return $this->idHabilidad;
    }

    /**
     * @param Habilidades $idHabilidad
     */
    public function setIdHabilidad($idHabilidad)
    {
        $this->idHabilidad = $idHabilidad;
    }

    /**
     * @return HistorialEducativo
     */
    public function getIdHistorial()
    {
        return $this->idHistorial;
    }

    /**
     * @param HistorialEducativo $idHistorial
     */
    public function setIdHistorial($idHistorial)
    {
        $this->idHistorial = $idHistorial;
    }

    /**
     * @return AprendizajeBasico
     */
    public function getIdAprendizaje()
    {
        return $this->idAprendizaje;
    }

    /**
     * @param AprendizajeBasico $idAprendizaje
     */
    public function setIdAprendizaje($idAprendizaje)
    {
        $this->idAprendizaje = $idAprendizaje;
    }

    /**
     * @return Motricidad
     */
    public function getIdMotricidad()
    {
        return $this->idMotricidad;
    }

    /**
     * @param Motricidad $idMotricidad
     */
    public function setIdMotricidad($idMotricidad)
    {
        $this->idMotricidad = $idMotricidad;
    }

    /**
     * @return Conducta
     */
    public function getIdConducta()
    {
        return $this->idConducta;
    }

    /**
     * @param Conducta $idConducta
     */
    public function setIdConducta($idConducta)
    {
        $this->idConducta = $idConducta;
    }

    /**
     * @return ConsultaMedica
     */
    public function getIdConsulta()
    {
        return $this->idConsulta;
    }

    /**
     * @param ConsultaMedica $idConsulta
     */
    public function setIdConsulta($idConsulta)
    {
        $this->idConsulta = $idConsulta;
    }

    /**
     * @return SeguimientoEstudiante
     */
    public function getIdSeguimiento()
    {
        return $this->idSeguimiento;
    }

    /**
     * @param SeguimientoEstudiante $idSeguimiento
     */
    public function setIdSeguimiento($idSeguimiento)
    {
        $this->idSeguimiento = $idSeguimiento;
    }

    /**
     * @return EstructuraFamiliar
     */
    public function getIdConvive()
    {
        return $this->idConvive;
    }

    /**
     * @param EstructuraFamiliar $idConvive
     */
    public function setIdConvive($idConvive)
    {
        $this->idConvive = $idConvive;
    }

    /**
     * @return EstructuraYFuncionOral
     */
    public function getIdEstructuraYFuncionOral()
    {
        return $this->idEstructuraYFuncionOral;
    }

    /**
     * @param EstructuraYFuncionOral $idEstructuraYFuncionOral
     */
    public function setIdEstructuraYFuncionOral($idEstructuraYFuncionOral)
    {
        $this->idEstructuraYFuncionOral = $idEstructuraYFuncionOral;
    }

    /**
     * @return AntecedentesPatologicos
     */
    public function getIdAntecedentesPatologicos()
    {
        return $this->idAntecedentesPatologicos;
    }

    /**
     * @param AntecedentesPatologicos $idAntecedentesPatologicos
     */
    public function setIdAntecedentesPatologicos($idAntecedentesPatologicos)
    {
        $this->idAntecedentesPatologicos = $idAntecedentesPatologicos;
    }

    /**
     * @return InformacionSalud
     */
    public function getIdSalud()
    {
        return $this->idSalud;
    }

    /**
     * @param InformacionSalud $idSalud
     */
    public function setIdSalud($idSalud)
    {
        $this->idSalud = $idSalud;
    }

    /**
     * @return Vivienda
     */
    public function getIdVivienda()
    {
        return $this->idVivienda;
    }

    /**
     * @param Vivienda $idVivienda
     */
    public function setIdVivienda($idVivienda)
    {
        $this->idVivienda = $idVivienda;
    }

    /**
     * @return HistorialDesarrolloSocioafectivo
     */
    public function getIdPsicologia2()
    {
        return $this->idPsicologia2;
    }

    /**
     * @param HistorialDesarrolloSocioafectivo $idPsicologia2
     */
    public function setIdPsicologia2($idPsicologia2)
    {
        $this->idPsicologia2 = $idPsicologia2;
    }

    /**
     * @return EgresosSituacionEconomica
     */
    public function getIdEgresos()
    {
        return $this->idEgresos;
    }

    /**
     * @param EgresosSituacionEconomica $idEgresos
     */
    public function setIdEgresos($idEgresos)
    {
        $this->idEgresos = $idEgresos;
    }

    /**
     * @return IngresosSituacionEconomica
     */
    public function getIdIngresos()
    {
        return $this->idIngresos;
    }

    /**
     * @param IngresosSituacionEconomica $idIngresos
     */
    public function setIdIngresos($idIngresos)
    {
        $this->idIngresos = $idIngresos;
    }

    /**
     * @return FichaLogopedica
     */
    public function getIdLogopedica()
    {
        return $this->idLogopedica;
    }

    /**
     * @param FichaLogopedica $idLogopedica
     */
    public function setIdLogopedica($idLogopedica)
    {
        $this->idLogopedica = $idLogopedica;
    }

    /**
     * @return DesarrolloMotorYLenguaje
     */
    public function getIdDesarrolloMotor()
    {
        return $this->idDesarrolloMotor;
    }

    /**
     * @param DesarrolloMotorYLenguaje $idDesarrolloMotor
     */
    public function setIdDesarrolloMotor($idDesarrolloMotor)
    {
        $this->idDesarrolloMotor = $idDesarrolloMotor;
    }

    /**
     * @return Estudiante
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }

    /**
     * @param Estudiante $idEstudiante
     */
    public function setIdEstudiante($idEstudiante)
    {
        $this->idEstudiante = $idEstudiante;
    }


}
