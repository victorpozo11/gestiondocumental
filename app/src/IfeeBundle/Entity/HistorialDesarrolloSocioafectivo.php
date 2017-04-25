<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialDesarrolloSocioafectivo
 *
 * @ORM\Table(name="historial_desarrollo_socioafectivo")
 * @ORM\Entity
 */
class HistorialDesarrolloSocioafectivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_EDAD_MATERNA_EMBARAZO", type="integer", nullable=true)
     */
    private $prenatalEdadMaternaEmbarazo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_NUMERO_EMBARAZOS", type="integer", nullable=true)
     */
    private $prenatalNumeroEmbarazos;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_ABORTOS", type="integer", nullable=true)
     */
    private $prenatalAbortos;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_NUMERO_HIJOS", type="integer", nullable=true)
     */
    private $prenatalNumeroHijos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_CONTROLES_EMBARAZO", type="boolean", nullable=true)
     */
    private $prenatalControlesEmbarazo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_NUMERO_LUGAR_HIJO", type="integer", nullable=true)
     */
    private $prenatalNumeroLugarHijo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_INFECCION_VAGINAL", type="boolean", nullable=true)
     */
    private $prenatalInfeccionVaginal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_CAIDAS", type="boolean", nullable=true)
     */
    private $prenatalCaidas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_AMENAZA_ABORTO", type="boolean", nullable=true)
     */
    private $prenatalAmenazaAborto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_RAYOSX", type="boolean", nullable=true)
     */
    private $prenatalRayosx;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_MEDICAMENTOS", type="text", length=65535, nullable=true)
     */
    private $prenatalMedicamentos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_ALCOHOL", type="boolean", nullable=true)
     */
    private $prenatalAlcohol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_TABACO", type="boolean", nullable=true)
     */
    private $prenatalTabaco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_DROGAS", type="boolean", nullable=true)
     */
    private $prenatalDrogas;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_OTROS_ESTIMULANTE", type="text", length=65535, nullable=true)
     */
    private $prenatalOtrosEstimulante;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_ESTADO_EMOCIONAL_EMBARAZO", type="text", length=65535, nullable=true)
     */
    private $prenatalEstadoEmocionalEmbarazo;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_ALIMENTACION_EMBARAZO", type="text", length=65535, nullable=true)
     */
    private $prenatalAlimentacionEmbarazo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_EMBARAZO_PLANIFICADO", type="boolean", nullable=true)
     */
    private $prenatalEmbarazoPlanificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRENATAL_EDAD_GESTACIONAL", type="integer", nullable=true)
     */
    private $prenatalEdadGestacional;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENATAL_TIPO_PARTO", type="text", length=65535, nullable=true)
     */
    private $prenatalTipoParto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRENATAL_CORDON_UMBILICAL_CUELLO", type="boolean", nullable=true)
     */
    private $prenatalCordonUmbilicalCuello;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_COLOR", type="text", length=65535, nullable=true)
     */
    private $postnatalColor;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_LLANTO", type="text", length=65535, nullable=true)
     */
    private $postnatalLlanto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="POSTNATAL_CUIDADOS_ESPECIALES", type="boolean", nullable=true)
     */
    private $postnatalCuidadosEspeciales;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSTNATAL_TIEMPO", type="integer", nullable=true)
     */
    private $postnatalTiempo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="POSTNATAL_HOSPITALIZACIONES", type="boolean", nullable=true)
     */
    private $postnatalHospitalizaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_CIRUGIAS", type="text", length=65535, nullable=true)
     */
    private $postnatalCirugias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="POSTNATAL_ANOMALIAS", type="boolean", nullable=true)
     */
    private $postnatalAnomalias;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_DESCRIPCION_ANOMALIAS", type="text", length=65535, nullable=true)
     */
    private $postnatalDescripcionAnomalias;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_ACCIDENTES", type="text", length=65535, nullable=true)
     */
    private $postnatalAccidentes;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_PESO", type="text", length=65535, nullable=true)
     */
    private $postnatalPeso;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTNATAL_TALLA", type="text", length=65535, nullable=true)
     */
    private $postnatalTalla;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVIDADES_VIDA_DIARIA_ALIMENTACION_ACTUAL", type="text", length=65535, nullable=true)
     */
    private $actividadesVidaDiariaAlimentacionActual;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVIDADES_VIDA_DIARIA_SUENIO", type="text", length=65535, nullable=true)
     */
    private $actividadesVidaDiariaSuenio;

    /**
     * @var string
     *
     * @ORM\Column(name="ESFINTERES_OBSERVACION", type="text", length=65535, nullable=true)
     */
    private $esfinteresObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="VESTIDO_OBSERVACION", type="text", length=65535, nullable=true)
     */
    private $vestidoObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_PADRE", type="text", length=65535, nullable=true)
     */
    private $relacionPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_MADRE", type="text", length=65535, nullable=true)
     */
    private $relacionMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_HERMANOS", type="text", length=65535, nullable=true)
     */
    private $relacionHermanos;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_LUDICA", type="text", length=65535, nullable=true)
     */
    private $relacionLudica;

    /**
     * @var string
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $metodosDisciplinaDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="EDUCACION_EXPECTATIVA_INGRESO", type="text", length=65535, nullable=true)
     */
    private $educacionExpectativaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="ADICIONALES_METODO_ANTICONCEPTIVO", type="text", length=65535, nullable=true)
     */
    private $adicionalesMetodoAnticonceptivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADICIONALES_BONO", type="boolean", nullable=true)
     */
    private $adicionalesBono;

    /**
     * @var string
     *
     * @ORM\Column(name="ADICIONALES_BONO_DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $adicionalesBonoDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ADICIONALES_EDAD_MENTAL", type="integer", nullable=true)
     */
    private $adicionalesEdadMental;

    /**
     * @var integer
     *
     * @ORM\Column(name="ADICIONALES_EDAD_FISICA", type="integer", nullable=true)
     */
    private $adicionalesEdadFisica;

    /**
     * @var string
     *
     * @ORM\Column(name="ADICIONALES_PERIODO", type="text", length=65535, nullable=true)
     */
    private $adicionalesPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_AMIGOS", type="text", length=65535, nullable=true)
     */
    private $relacionAmigos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_PEGA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaPega;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_REGANIA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaRegania;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_RAZONA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaRazona;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_AMENAZA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaAmenaza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_IGNORA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaIgnora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_RETIRA_OBJETO", type="boolean", nullable=true)
     */
    private $metodosDisciplinaRetiraObjeto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_NINGUNA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaNinguna;

    /**
     * @var boolean
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_OTRA", type="boolean", nullable=true)
     */
    private $metodosDisciplinaOtra;

    /**
     * @var string
     *
     * @ORM\Column(name="METODOS_DISCIPLINA_DESCRIPCION_OTRA", type="text", length=65535, nullable=true)
     */
    private $metodosDisciplinaDescripcionOtra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_ELOGIOS", type="boolean", nullable=true)
     */
    private $buenComportamientoElogios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_REGALOS", type="boolean", nullable=true)
     */
    private $buenComportamientoRegalos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_CARICIAS", type="boolean", nullable=true)
     */
    private $buenComportamientoCaricias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_NINGUN_PREMIO", type="boolean", nullable=true)
     */
    private $buenComportamientoNingunPremio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_COMIDA", type="boolean", nullable=true)
     */
    private $buenComportamientoComida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_OBJETOS", type="boolean", nullable=true)
     */
    private $buenComportamientoObjetos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BUEN_COMPORTAMIENTO_HACE_LO_QUE_LE_GUSTA", type="boolean", nullable=true)
     */
    private $buenComportamientoHaceLoQueLeGusta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RIESGO_FAMILIAR_PLANIFICACION_FAMILIAR", type="boolean", nullable=true)
     */
    private $riesgoFamiliarPlanificacionFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="RIESGO_FAMILIAR_CUAL_PLANIFICACION_FAMILIAR", type="text", length=65535, nullable=true)
     */
    private $riesgoFamiliarCualPlanificacionFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="RIESGO_FAMILIAR_COMUNICACION_PAREJA", type="text", length=65535, nullable=true)
     */
    private $riesgoFamiliarComunicacionPareja;

    /**
     * @var string
     *
     * @ORM\Column(name="RIESGO_FAMILIAR_RESPONSABLE_DESPUES_ESCUELA", type="text", length=65535, nullable=true)
     */
    private $riesgoFamiliarResponsableDespuesEscuela;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MALTRATO_FISICO", type="boolean", nullable=true)
     */
    private $maltratoFisico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MALTRATO_PSICOLOGICO", type="boolean", nullable=true)
     */
    private $maltratoPsicologico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MALTRATO_SEXUAL", type="boolean", nullable=true)
     */
    private $maltratoSexual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MALTRATO_MACHISMO", type="boolean", nullable=true)
     */
    private $maltratoMachismo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MALTRATO_VIOLENCIA_INTRAFAMILIAR", type="boolean", nullable=true)
     */
    private $maltratoViolenciaIntrafamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="SITUACION_LEGAL", type="text", length=65535, nullable=true)
     */
    private $situacionLegal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PSICOLOGIA2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPsicologia2;


}
