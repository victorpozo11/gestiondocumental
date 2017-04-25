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

    /**
     * @return int
     */
    public function getPrenatalEdadMaternaEmbarazo()
    {
        return $this->prenatalEdadMaternaEmbarazo;
    }

    /**
     * @param int $prenatalEdadMaternaEmbarazo
     */
    public function setPrenatalEdadMaternaEmbarazo($prenatalEdadMaternaEmbarazo)
    {
        $this->prenatalEdadMaternaEmbarazo = $prenatalEdadMaternaEmbarazo;
    }

    /**
     * @return int
     */
    public function getPrenatalNumeroEmbarazos()
    {
        return $this->prenatalNumeroEmbarazos;
    }

    /**
     * @param int $prenatalNumeroEmbarazos
     */
    public function setPrenatalNumeroEmbarazos($prenatalNumeroEmbarazos)
    {
        $this->prenatalNumeroEmbarazos = $prenatalNumeroEmbarazos;
    }

    /**
     * @return int
     */
    public function getPrenatalAbortos()
    {
        return $this->prenatalAbortos;
    }

    /**
     * @param int $prenatalAbortos
     */
    public function setPrenatalAbortos($prenatalAbortos)
    {
        $this->prenatalAbortos = $prenatalAbortos;
    }

    /**
     * @return int
     */
    public function getPrenatalNumeroHijos()
    {
        return $this->prenatalNumeroHijos;
    }

    /**
     * @param int $prenatalNumeroHijos
     */
    public function setPrenatalNumeroHijos($prenatalNumeroHijos)
    {
        $this->prenatalNumeroHijos = $prenatalNumeroHijos;
    }

    /**
     * @return bool
     */
    public function isPrenatalControlesEmbarazo()
    {
        return $this->prenatalControlesEmbarazo;
    }

    /**
     * @param bool $prenatalControlesEmbarazo
     */
    public function setPrenatalControlesEmbarazo($prenatalControlesEmbarazo)
    {
        $this->prenatalControlesEmbarazo = $prenatalControlesEmbarazo;
    }

    /**
     * @return int
     */
    public function getPrenatalNumeroLugarHijo()
    {
        return $this->prenatalNumeroLugarHijo;
    }

    /**
     * @param int $prenatalNumeroLugarHijo
     */
    public function setPrenatalNumeroLugarHijo($prenatalNumeroLugarHijo)
    {
        $this->prenatalNumeroLugarHijo = $prenatalNumeroLugarHijo;
    }

    /**
     * @return bool
     */
    public function isPrenatalInfeccionVaginal()
    {
        return $this->prenatalInfeccionVaginal;
    }

    /**
     * @param bool $prenatalInfeccionVaginal
     */
    public function setPrenatalInfeccionVaginal($prenatalInfeccionVaginal)
    {
        $this->prenatalInfeccionVaginal = $prenatalInfeccionVaginal;
    }

    /**
     * @return bool
     */
    public function isPrenatalCaidas()
    {
        return $this->prenatalCaidas;
    }

    /**
     * @param bool $prenatalCaidas
     */
    public function setPrenatalCaidas($prenatalCaidas)
    {
        $this->prenatalCaidas = $prenatalCaidas;
    }

    /**
     * @return bool
     */
    public function isPrenatalAmenazaAborto()
    {
        return $this->prenatalAmenazaAborto;
    }

    /**
     * @param bool $prenatalAmenazaAborto
     */
    public function setPrenatalAmenazaAborto($prenatalAmenazaAborto)
    {
        $this->prenatalAmenazaAborto = $prenatalAmenazaAborto;
    }

    /**
     * @return bool
     */
    public function isPrenatalRayosx()
    {
        return $this->prenatalRayosx;
    }

    /**
     * @param bool $prenatalRayosx
     */
    public function setPrenatalRayosx($prenatalRayosx)
    {
        $this->prenatalRayosx = $prenatalRayosx;
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
     * @return bool
     */
    public function isPrenatalAlcohol()
    {
        return $this->prenatalAlcohol;
    }

    /**
     * @param bool $prenatalAlcohol
     */
    public function setPrenatalAlcohol($prenatalAlcohol)
    {
        $this->prenatalAlcohol = $prenatalAlcohol;
    }

    /**
     * @return bool
     */
    public function isPrenatalTabaco()
    {
        return $this->prenatalTabaco;
    }

    /**
     * @param bool $prenatalTabaco
     */
    public function setPrenatalTabaco($prenatalTabaco)
    {
        $this->prenatalTabaco = $prenatalTabaco;
    }

    /**
     * @return bool
     */
    public function isPrenatalDrogas()
    {
        return $this->prenatalDrogas;
    }

    /**
     * @param bool $prenatalDrogas
     */
    public function setPrenatalDrogas($prenatalDrogas)
    {
        $this->prenatalDrogas = $prenatalDrogas;
    }

    /**
     * @return string
     */
    public function getPrenatalOtrosEstimulante()
    {
        return $this->prenatalOtrosEstimulante;
    }

    /**
     * @param string $prenatalOtrosEstimulante
     */
    public function setPrenatalOtrosEstimulante($prenatalOtrosEstimulante)
    {
        $this->prenatalOtrosEstimulante = $prenatalOtrosEstimulante;
    }

    /**
     * @return string
     */
    public function getPrenatalEstadoEmocionalEmbarazo()
    {
        return $this->prenatalEstadoEmocionalEmbarazo;
    }

    /**
     * @param string $prenatalEstadoEmocionalEmbarazo
     */
    public function setPrenatalEstadoEmocionalEmbarazo($prenatalEstadoEmocionalEmbarazo)
    {
        $this->prenatalEstadoEmocionalEmbarazo = $prenatalEstadoEmocionalEmbarazo;
    }

    /**
     * @return string
     */
    public function getPrenatalAlimentacionEmbarazo()
    {
        return $this->prenatalAlimentacionEmbarazo;
    }

    /**
     * @param string $prenatalAlimentacionEmbarazo
     */
    public function setPrenatalAlimentacionEmbarazo($prenatalAlimentacionEmbarazo)
    {
        $this->prenatalAlimentacionEmbarazo = $prenatalAlimentacionEmbarazo;
    }

    /**
     * @return bool
     */
    public function isPrenatalEmbarazoPlanificado()
    {
        return $this->prenatalEmbarazoPlanificado;
    }

    /**
     * @param bool $prenatalEmbarazoPlanificado
     */
    public function setPrenatalEmbarazoPlanificado($prenatalEmbarazoPlanificado)
    {
        $this->prenatalEmbarazoPlanificado = $prenatalEmbarazoPlanificado;
    }

    /**
     * @return int
     */
    public function getPrenatalEdadGestacional()
    {
        return $this->prenatalEdadGestacional;
    }

    /**
     * @param int $prenatalEdadGestacional
     */
    public function setPrenatalEdadGestacional($prenatalEdadGestacional)
    {
        $this->prenatalEdadGestacional = $prenatalEdadGestacional;
    }

    /**
     * @return string
     */
    public function getPrenatalTipoParto()
    {
        return $this->prenatalTipoParto;
    }

    /**
     * @param string $prenatalTipoParto
     */
    public function setPrenatalTipoParto($prenatalTipoParto)
    {
        $this->prenatalTipoParto = $prenatalTipoParto;
    }

    /**
     * @return bool
     */
    public function isPrenatalCordonUmbilicalCuello()
    {
        return $this->prenatalCordonUmbilicalCuello;
    }

    /**
     * @param bool $prenatalCordonUmbilicalCuello
     */
    public function setPrenatalCordonUmbilicalCuello($prenatalCordonUmbilicalCuello)
    {
        $this->prenatalCordonUmbilicalCuello = $prenatalCordonUmbilicalCuello;
    }

    /**
     * @return string
     */
    public function getPostnatalColor()
    {
        return $this->postnatalColor;
    }

    /**
     * @param string $postnatalColor
     */
    public function setPostnatalColor($postnatalColor)
    {
        $this->postnatalColor = $postnatalColor;
    }

    /**
     * @return string
     */
    public function getPostnatalLlanto()
    {
        return $this->postnatalLlanto;
    }

    /**
     * @param string $postnatalLlanto
     */
    public function setPostnatalLlanto($postnatalLlanto)
    {
        $this->postnatalLlanto = $postnatalLlanto;
    }

    /**
     * @return bool
     */
    public function isPostnatalCuidadosEspeciales()
    {
        return $this->postnatalCuidadosEspeciales;
    }

    /**
     * @param bool $postnatalCuidadosEspeciales
     */
    public function setPostnatalCuidadosEspeciales($postnatalCuidadosEspeciales)
    {
        $this->postnatalCuidadosEspeciales = $postnatalCuidadosEspeciales;
    }

    /**
     * @return int
     */
    public function getPostnatalTiempo()
    {
        return $this->postnatalTiempo;
    }

    /**
     * @param int $postnatalTiempo
     */
    public function setPostnatalTiempo($postnatalTiempo)
    {
        $this->postnatalTiempo = $postnatalTiempo;
    }

    /**
     * @return bool
     */
    public function isPostnatalHospitalizaciones()
    {
        return $this->postnatalHospitalizaciones;
    }

    /**
     * @param bool $postnatalHospitalizaciones
     */
    public function setPostnatalHospitalizaciones($postnatalHospitalizaciones)
    {
        $this->postnatalHospitalizaciones = $postnatalHospitalizaciones;
    }

    /**
     * @return string
     */
    public function getPostnatalCirugias()
    {
        return $this->postnatalCirugias;
    }

    /**
     * @param string $postnatalCirugias
     */
    public function setPostnatalCirugias($postnatalCirugias)
    {
        $this->postnatalCirugias = $postnatalCirugias;
    }

    /**
     * @return bool
     */
    public function isPostnatalAnomalias()
    {
        return $this->postnatalAnomalias;
    }

    /**
     * @param bool $postnatalAnomalias
     */
    public function setPostnatalAnomalias($postnatalAnomalias)
    {
        $this->postnatalAnomalias = $postnatalAnomalias;
    }

    /**
     * @return string
     */
    public function getPostnatalDescripcionAnomalias()
    {
        return $this->postnatalDescripcionAnomalias;
    }

    /**
     * @param string $postnatalDescripcionAnomalias
     */
    public function setPostnatalDescripcionAnomalias($postnatalDescripcionAnomalias)
    {
        $this->postnatalDescripcionAnomalias = $postnatalDescripcionAnomalias;
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
     * @return string
     */
    public function getPostnatalPeso()
    {
        return $this->postnatalPeso;
    }

    /**
     * @param string $postnatalPeso
     */
    public function setPostnatalPeso($postnatalPeso)
    {
        $this->postnatalPeso = $postnatalPeso;
    }

    /**
     * @return string
     */
    public function getPostnatalTalla()
    {
        return $this->postnatalTalla;
    }

    /**
     * @param string $postnatalTalla
     */
    public function setPostnatalTalla($postnatalTalla)
    {
        $this->postnatalTalla = $postnatalTalla;
    }

    /**
     * @return string
     */
    public function getActividadesVidaDiariaAlimentacionActual()
    {
        return $this->actividadesVidaDiariaAlimentacionActual;
    }

    /**
     * @param string $actividadesVidaDiariaAlimentacionActual
     */
    public function setActividadesVidaDiariaAlimentacionActual($actividadesVidaDiariaAlimentacionActual)
    {
        $this->actividadesVidaDiariaAlimentacionActual = $actividadesVidaDiariaAlimentacionActual;
    }

    /**
     * @return string
     */
    public function getActividadesVidaDiariaSuenio()
    {
        return $this->actividadesVidaDiariaSuenio;
    }

    /**
     * @param string $actividadesVidaDiariaSuenio
     */
    public function setActividadesVidaDiariaSuenio($actividadesVidaDiariaSuenio)
    {
        $this->actividadesVidaDiariaSuenio = $actividadesVidaDiariaSuenio;
    }

    /**
     * @return string
     */
    public function getEsfinteresObservacion()
    {
        return $this->esfinteresObservacion;
    }

    /**
     * @param string $esfinteresObservacion
     */
    public function setEsfinteresObservacion($esfinteresObservacion)
    {
        $this->esfinteresObservacion = $esfinteresObservacion;
    }

    /**
     * @return string
     */
    public function getVestidoObservacion()
    {
        return $this->vestidoObservacion;
    }

    /**
     * @param string $vestidoObservacion
     */
    public function setVestidoObservacion($vestidoObservacion)
    {
        $this->vestidoObservacion = $vestidoObservacion;
    }

    /**
     * @return string
     */
    public function getRelacionPadre()
    {
        return $this->relacionPadre;
    }

    /**
     * @param string $relacionPadre
     */
    public function setRelacionPadre($relacionPadre)
    {
        $this->relacionPadre = $relacionPadre;
    }

    /**
     * @return string
     */
    public function getRelacionMadre()
    {
        return $this->relacionMadre;
    }

    /**
     * @param string $relacionMadre
     */
    public function setRelacionMadre($relacionMadre)
    {
        $this->relacionMadre = $relacionMadre;
    }

    /**
     * @return string
     */
    public function getRelacionHermanos()
    {
        return $this->relacionHermanos;
    }

    /**
     * @param string $relacionHermanos
     */
    public function setRelacionHermanos($relacionHermanos)
    {
        $this->relacionHermanos = $relacionHermanos;
    }

    /**
     * @return string
     */
    public function getRelacionLudica()
    {
        return $this->relacionLudica;
    }

    /**
     * @param string $relacionLudica
     */
    public function setRelacionLudica($relacionLudica)
    {
        $this->relacionLudica = $relacionLudica;
    }

    /**
     * @return string
     */
    public function getMetodosDisciplinaDescripcion()
    {
        return $this->metodosDisciplinaDescripcion;
    }

    /**
     * @param string $metodosDisciplinaDescripcion
     */
    public function setMetodosDisciplinaDescripcion($metodosDisciplinaDescripcion)
    {
        $this->metodosDisciplinaDescripcion = $metodosDisciplinaDescripcion;
    }

    /**
     * @return string
     */
    public function getEducacionExpectativaIngreso()
    {
        return $this->educacionExpectativaIngreso;
    }

    /**
     * @param string $educacionExpectativaIngreso
     */
    public function setEducacionExpectativaIngreso($educacionExpectativaIngreso)
    {
        $this->educacionExpectativaIngreso = $educacionExpectativaIngreso;
    }

    /**
     * @return string
     */
    public function getAdicionalesMetodoAnticonceptivo()
    {
        return $this->adicionalesMetodoAnticonceptivo;
    }

    /**
     * @param string $adicionalesMetodoAnticonceptivo
     */
    public function setAdicionalesMetodoAnticonceptivo($adicionalesMetodoAnticonceptivo)
    {
        $this->adicionalesMetodoAnticonceptivo = $adicionalesMetodoAnticonceptivo;
    }

    /**
     * @return bool
     */
    public function isAdicionalesBono()
    {
        return $this->adicionalesBono;
    }

    /**
     * @param bool $adicionalesBono
     */
    public function setAdicionalesBono($adicionalesBono)
    {
        $this->adicionalesBono = $adicionalesBono;
    }

    /**
     * @return string
     */
    public function getAdicionalesBonoDescripcion()
    {
        return $this->adicionalesBonoDescripcion;
    }

    /**
     * @param string $adicionalesBonoDescripcion
     */
    public function setAdicionalesBonoDescripcion($adicionalesBonoDescripcion)
    {
        $this->adicionalesBonoDescripcion = $adicionalesBonoDescripcion;
    }

    /**
     * @return int
     */
    public function getAdicionalesEdadMental()
    {
        return $this->adicionalesEdadMental;
    }

    /**
     * @param int $adicionalesEdadMental
     */
    public function setAdicionalesEdadMental($adicionalesEdadMental)
    {
        $this->adicionalesEdadMental = $adicionalesEdadMental;
    }

    /**
     * @return int
     */
    public function getAdicionalesEdadFisica()
    {
        return $this->adicionalesEdadFisica;
    }

    /**
     * @param int $adicionalesEdadFisica
     */
    public function setAdicionalesEdadFisica($adicionalesEdadFisica)
    {
        $this->adicionalesEdadFisica = $adicionalesEdadFisica;
    }

    /**
     * @return string
     */
    public function getAdicionalesPeriodo()
    {
        return $this->adicionalesPeriodo;
    }

    /**
     * @param string $adicionalesPeriodo
     */
    public function setAdicionalesPeriodo($adicionalesPeriodo)
    {
        $this->adicionalesPeriodo = $adicionalesPeriodo;
    }

    /**
     * @return string
     */
    public function getRelacionAmigos()
    {
        return $this->relacionAmigos;
    }

    /**
     * @param string $relacionAmigos
     */
    public function setRelacionAmigos($relacionAmigos)
    {
        $this->relacionAmigos = $relacionAmigos;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaPega()
    {
        return $this->metodosDisciplinaPega;
    }

    /**
     * @param bool $metodosDisciplinaPega
     */
    public function setMetodosDisciplinaPega($metodosDisciplinaPega)
    {
        $this->metodosDisciplinaPega = $metodosDisciplinaPega;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaRegania()
    {
        return $this->metodosDisciplinaRegania;
    }

    /**
     * @param bool $metodosDisciplinaRegania
     */
    public function setMetodosDisciplinaRegania($metodosDisciplinaRegania)
    {
        $this->metodosDisciplinaRegania = $metodosDisciplinaRegania;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaRazona()
    {
        return $this->metodosDisciplinaRazona;
    }

    /**
     * @param bool $metodosDisciplinaRazona
     */
    public function setMetodosDisciplinaRazona($metodosDisciplinaRazona)
    {
        $this->metodosDisciplinaRazona = $metodosDisciplinaRazona;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaAmenaza()
    {
        return $this->metodosDisciplinaAmenaza;
    }

    /**
     * @param bool $metodosDisciplinaAmenaza
     */
    public function setMetodosDisciplinaAmenaza($metodosDisciplinaAmenaza)
    {
        $this->metodosDisciplinaAmenaza = $metodosDisciplinaAmenaza;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaIgnora()
    {
        return $this->metodosDisciplinaIgnora;
    }

    /**
     * @param bool $metodosDisciplinaIgnora
     */
    public function setMetodosDisciplinaIgnora($metodosDisciplinaIgnora)
    {
        $this->metodosDisciplinaIgnora = $metodosDisciplinaIgnora;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaRetiraObjeto()
    {
        return $this->metodosDisciplinaRetiraObjeto;
    }

    /**
     * @param bool $metodosDisciplinaRetiraObjeto
     */
    public function setMetodosDisciplinaRetiraObjeto($metodosDisciplinaRetiraObjeto)
    {
        $this->metodosDisciplinaRetiraObjeto = $metodosDisciplinaRetiraObjeto;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaNinguna()
    {
        return $this->metodosDisciplinaNinguna;
    }

    /**
     * @param bool $metodosDisciplinaNinguna
     */
    public function setMetodosDisciplinaNinguna($metodosDisciplinaNinguna)
    {
        $this->metodosDisciplinaNinguna = $metodosDisciplinaNinguna;
    }

    /**
     * @return bool
     */
    public function isMetodosDisciplinaOtra()
    {
        return $this->metodosDisciplinaOtra;
    }

    /**
     * @param bool $metodosDisciplinaOtra
     */
    public function setMetodosDisciplinaOtra($metodosDisciplinaOtra)
    {
        $this->metodosDisciplinaOtra = $metodosDisciplinaOtra;
    }

    /**
     * @return string
     */
    public function getMetodosDisciplinaDescripcionOtra()
    {
        return $this->metodosDisciplinaDescripcionOtra;
    }

    /**
     * @param string $metodosDisciplinaDescripcionOtra
     */
    public function setMetodosDisciplinaDescripcionOtra($metodosDisciplinaDescripcionOtra)
    {
        $this->metodosDisciplinaDescripcionOtra = $metodosDisciplinaDescripcionOtra;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoElogios()
    {
        return $this->buenComportamientoElogios;
    }

    /**
     * @param bool $buenComportamientoElogios
     */
    public function setBuenComportamientoElogios($buenComportamientoElogios)
    {
        $this->buenComportamientoElogios = $buenComportamientoElogios;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoRegalos()
    {
        return $this->buenComportamientoRegalos;
    }

    /**
     * @param bool $buenComportamientoRegalos
     */
    public function setBuenComportamientoRegalos($buenComportamientoRegalos)
    {
        $this->buenComportamientoRegalos = $buenComportamientoRegalos;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoCaricias()
    {
        return $this->buenComportamientoCaricias;
    }

    /**
     * @param bool $buenComportamientoCaricias
     */
    public function setBuenComportamientoCaricias($buenComportamientoCaricias)
    {
        $this->buenComportamientoCaricias = $buenComportamientoCaricias;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoNingunPremio()
    {
        return $this->buenComportamientoNingunPremio;
    }

    /**
     * @param bool $buenComportamientoNingunPremio
     */
    public function setBuenComportamientoNingunPremio($buenComportamientoNingunPremio)
    {
        $this->buenComportamientoNingunPremio = $buenComportamientoNingunPremio;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoComida()
    {
        return $this->buenComportamientoComida;
    }

    /**
     * @param bool $buenComportamientoComida
     */
    public function setBuenComportamientoComida($buenComportamientoComida)
    {
        $this->buenComportamientoComida = $buenComportamientoComida;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoObjetos()
    {
        return $this->buenComportamientoObjetos;
    }

    /**
     * @param bool $buenComportamientoObjetos
     */
    public function setBuenComportamientoObjetos($buenComportamientoObjetos)
    {
        $this->buenComportamientoObjetos = $buenComportamientoObjetos;
    }

    /**
     * @return bool
     */
    public function isBuenComportamientoHaceLoQueLeGusta()
    {
        return $this->buenComportamientoHaceLoQueLeGusta;
    }

    /**
     * @param bool $buenComportamientoHaceLoQueLeGusta
     */
    public function setBuenComportamientoHaceLoQueLeGusta($buenComportamientoHaceLoQueLeGusta)
    {
        $this->buenComportamientoHaceLoQueLeGusta = $buenComportamientoHaceLoQueLeGusta;
    }

    /**
     * @return bool
     */
    public function isRiesgoFamiliarPlanificacionFamiliar()
    {
        return $this->riesgoFamiliarPlanificacionFamiliar;
    }

    /**
     * @param bool $riesgoFamiliarPlanificacionFamiliar
     */
    public function setRiesgoFamiliarPlanificacionFamiliar($riesgoFamiliarPlanificacionFamiliar)
    {
        $this->riesgoFamiliarPlanificacionFamiliar = $riesgoFamiliarPlanificacionFamiliar;
    }

    /**
     * @return string
     */
    public function getRiesgoFamiliarCualPlanificacionFamiliar()
    {
        return $this->riesgoFamiliarCualPlanificacionFamiliar;
    }

    /**
     * @param string $riesgoFamiliarCualPlanificacionFamiliar
     */
    public function setRiesgoFamiliarCualPlanificacionFamiliar($riesgoFamiliarCualPlanificacionFamiliar)
    {
        $this->riesgoFamiliarCualPlanificacionFamiliar = $riesgoFamiliarCualPlanificacionFamiliar;
    }

    /**
     * @return string
     */
    public function getRiesgoFamiliarComunicacionPareja()
    {
        return $this->riesgoFamiliarComunicacionPareja;
    }

    /**
     * @param string $riesgoFamiliarComunicacionPareja
     */
    public function setRiesgoFamiliarComunicacionPareja($riesgoFamiliarComunicacionPareja)
    {
        $this->riesgoFamiliarComunicacionPareja = $riesgoFamiliarComunicacionPareja;
    }

    /**
     * @return string
     */
    public function getRiesgoFamiliarResponsableDespuesEscuela()
    {
        return $this->riesgoFamiliarResponsableDespuesEscuela;
    }

    /**
     * @param string $riesgoFamiliarResponsableDespuesEscuela
     */
    public function setRiesgoFamiliarResponsableDespuesEscuela($riesgoFamiliarResponsableDespuesEscuela)
    {
        $this->riesgoFamiliarResponsableDespuesEscuela = $riesgoFamiliarResponsableDespuesEscuela;
    }

    /**
     * @return bool
     */
    public function isMaltratoFisico()
    {
        return $this->maltratoFisico;
    }

    /**
     * @param bool $maltratoFisico
     */
    public function setMaltratoFisico($maltratoFisico)
    {
        $this->maltratoFisico = $maltratoFisico;
    }

    /**
     * @return bool
     */
    public function isMaltratoPsicologico()
    {
        return $this->maltratoPsicologico;
    }

    /**
     * @param bool $maltratoPsicologico
     */
    public function setMaltratoPsicologico($maltratoPsicologico)
    {
        $this->maltratoPsicologico = $maltratoPsicologico;
    }

    /**
     * @return bool
     */
    public function isMaltratoSexual()
    {
        return $this->maltratoSexual;
    }

    /**
     * @param bool $maltratoSexual
     */
    public function setMaltratoSexual($maltratoSexual)
    {
        $this->maltratoSexual = $maltratoSexual;
    }

    /**
     * @return bool
     */
    public function isMaltratoMachismo()
    {
        return $this->maltratoMachismo;
    }

    /**
     * @param bool $maltratoMachismo
     */
    public function setMaltratoMachismo($maltratoMachismo)
    {
        $this->maltratoMachismo = $maltratoMachismo;
    }

    /**
     * @return bool
     */
    public function isMaltratoViolenciaIntrafamiliar()
    {
        return $this->maltratoViolenciaIntrafamiliar;
    }

    /**
     * @param bool $maltratoViolenciaIntrafamiliar
     */
    public function setMaltratoViolenciaIntrafamiliar($maltratoViolenciaIntrafamiliar)
    {
        $this->maltratoViolenciaIntrafamiliar = $maltratoViolenciaIntrafamiliar;
    }

    /**
     * @return string
     */
    public function getSituacionLegal()
    {
        return $this->situacionLegal;
    }

    /**
     * @param string $situacionLegal
     */
    public function setSituacionLegal($situacionLegal)
    {
        $this->situacionLegal = $situacionLegal;
    }

    /**
     * @return int
     */
    public function getIdPsicologia2()
    {
        return $this->idPsicologia2;
    }

    /**
     * @param int $idPsicologia2
     */
    public function setIdPsicologia2($idPsicologia2)
    {
        $this->idPsicologia2 = $idPsicologia2;
    }


}
