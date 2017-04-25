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


}
