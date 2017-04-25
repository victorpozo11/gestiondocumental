<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstructuraYFuncionOral
 *
 * @ORM\Table(name="estructura_y_funcion_oral")
 * @ORM\Entity
 */
class EstructuraYFuncionOral
{
    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_TAMANIO", type="text", length=65535, nullable=true)
     */
    private $lenguaTamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_PROTRUCION_RECTA", type="text", length=65535, nullable=true)
     */
    private $lenguaProtrucionRecta;

    /**
     * @var string
     *
     * @ORM\Column(name="LANGUA_LATERALIZACION_IZQ", type="text", length=65535, nullable=true)
     */
    private $languaLateralizacionIzq;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_LATERALIZACION_DER", type="text", length=65535, nullable=true)
     */
    private $lenguaLateralizacionDer;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_ELEVACION_DIENTES_SUPERIORES", type="text", length=65535, nullable=true)
     */
    private $lenguaElevacionDientesSuperiores;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_MOV_ALTERNOS_SACAR_METER", type="text", length=65535, nullable=true)
     */
    private $lenguaMovAlternosSacarMeter;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_MOV_ALTERNOS_PRODUCIR_LA", type="text", length=65535, nullable=true)
     */
    private $lenguaMovAlternosProducirLa;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_MOV_ALTERNOS_PRODUCIR_KA", type="text", length=65535, nullable=true)
     */
    private $lenguaMovAlternosProducirKa;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_MOV_ALTERNOS_VIBRAR", type="text", length=65535, nullable=true)
     */
    private $lenguaMovAlternosVibrar;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_ACANALARLA", type="text", length=65535, nullable=true)
     */
    private $lenguaAcanalarla;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_TEMBLORES", type="text", length=65535, nullable=true)
     */
    private $lenguaTemblores;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUA_OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $lenguaObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_SIMETRIA_FORMA", type="text", length=65535, nullable=true)
     */
    private $labiosSimetriaForma;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_PROTUCION", type="text", length=65535, nullable=true)
     */
    private $labiosProtucion;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_RETRACCION", type="text", length=65535, nullable=true)
     */
    private $labiosRetraccion;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_ABRIR_CERRAR_BOCA", type="text", length=65535, nullable=true)
     */
    private $labiosAbrirCerrarBoca;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_APRETAR_BOCA", type="text", length=65535, nullable=true)
     */
    private $labiosApretarBoca;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_PRODUCCION", type="text", length=65535, nullable=true)
     */
    private $labiosProduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="LABIOS_OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $labiosObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="PALADAR_SIMETRIA_FORMA", type="text", length=65535, nullable=true)
     */
    private $paladarSimetriaForma;

    /**
     * @var string
     *
     * @ORM\Column(name="PALADAR_UVULA", type="text", length=65535, nullable=true)
     */
    private $paladarUvula;

    /**
     * @var string
     *
     * @ORM\Column(name="PALADAR_MOVILIDAD_VELO", type="text", length=65535, nullable=true)
     */
    private $paladarMovilidadVelo;

    /**
     * @var string
     *
     * @ORM\Column(name="PALADAR_OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $paladarObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_IMPLANTACION", type="text", length=65535, nullable=true)
     */
    private $dientesImplantacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_ESTADOS", type="text", length=65535, nullable=true)
     */
    private $dientesEstados;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_OCLUSION", type="text", length=65535, nullable=true)
     */
    private $dientesOclusion;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_DENTATURA_POSTIZA", type="text", length=65535, nullable=true)
     */
    private $dientesDentaturaPostiza;

    /**
     * @var string
     *
     * @ORM\Column(name="DIENTES_OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $dientesObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="MOV_MAXILAR_DER", type="text", length=65535, nullable=true)
     */
    private $movMaxilarDer;

    /**
     * @var string
     *
     * @ORM\Column(name="MOV_MAXILAR_IZQ", type="text", length=65535, nullable=true)
     */
    private $movMaxilarIzq;

    /**
     * @var string
     *
     * @ORM\Column(name="MOV_MAXILAR_ADELANTE", type="text", length=65535, nullable=true)
     */
    private $movMaxilarAdelante;

    /**
     * @var string
     *
     * @ORM\Column(name="MOV_MAXILAR_ROTACION", type="text", length=65535, nullable=true)
     */
    private $movMaxilarRotacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="REPORTE_PACIENTE_DEGLUTIR_VOLUNTARIO", type="boolean", nullable=true)
     */
    private $reportePacienteDeglutirVoluntario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="REPORTE_PACIENTE_DEGLUTIR_INVOLUNTARIO", type="boolean", nullable=true)
     */
    private $reportePacienteDeglutirInvoluntario;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_MASTICAR", type="text", length=65535, nullable=true)
     */
    private $reportePacienteMasticar;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_CARRASPEAR", type="text", length=65535, nullable=true)
     */
    private $reportePacienteCarraspear;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_CIALORREA", type="text", length=65535, nullable=true)
     */
    private $reportePacienteCialorrea;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_REFLEJO_PALADAR", type="text", length=65535, nullable=true)
     */
    private $reportePacienteReflejoPaladar;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_DIFICULTAD_MOV_ORALES", type="text", length=65535, nullable=true)
     */
    private $reportePacienteDificultadMovOrales;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTE_PACIENTE_OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $reportePacienteObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ESTRUCTURA_Y_FUNCION_ORAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstructuraYFuncionOral;

    /**
     * @return string
     */
    public function getLenguaTamanio()
    {
        return $this->lenguaTamanio;
    }

    /**
     * @param string $lenguaTamanio
     */
    public function setLenguaTamanio($lenguaTamanio)
    {
        $this->lenguaTamanio = $lenguaTamanio;
    }

    /**
     * @return string
     */
    public function getLenguaProtrucionRecta()
    {
        return $this->lenguaProtrucionRecta;
    }

    /**
     * @param string $lenguaProtrucionRecta
     */
    public function setLenguaProtrucionRecta($lenguaProtrucionRecta)
    {
        $this->lenguaProtrucionRecta = $lenguaProtrucionRecta;
    }

    /**
     * @return string
     */
    public function getLanguaLateralizacionIzq()
    {
        return $this->languaLateralizacionIzq;
    }

    /**
     * @param string $languaLateralizacionIzq
     */
    public function setLanguaLateralizacionIzq($languaLateralizacionIzq)
    {
        $this->languaLateralizacionIzq = $languaLateralizacionIzq;
    }

    /**
     * @return string
     */
    public function getLenguaLateralizacionDer()
    {
        return $this->lenguaLateralizacionDer;
    }

    /**
     * @param string $lenguaLateralizacionDer
     */
    public function setLenguaLateralizacionDer($lenguaLateralizacionDer)
    {
        $this->lenguaLateralizacionDer = $lenguaLateralizacionDer;
    }

    /**
     * @return string
     */
    public function getLenguaElevacionDientesSuperiores()
    {
        return $this->lenguaElevacionDientesSuperiores;
    }

    /**
     * @param string $lenguaElevacionDientesSuperiores
     */
    public function setLenguaElevacionDientesSuperiores($lenguaElevacionDientesSuperiores)
    {
        $this->lenguaElevacionDientesSuperiores = $lenguaElevacionDientesSuperiores;
    }

    /**
     * @return string
     */
    public function getLenguaMovAlternosSacarMeter()
    {
        return $this->lenguaMovAlternosSacarMeter;
    }

    /**
     * @param string $lenguaMovAlternosSacarMeter
     */
    public function setLenguaMovAlternosSacarMeter($lenguaMovAlternosSacarMeter)
    {
        $this->lenguaMovAlternosSacarMeter = $lenguaMovAlternosSacarMeter;
    }

    /**
     * @return string
     */
    public function getLenguaMovAlternosProducirLa()
    {
        return $this->lenguaMovAlternosProducirLa;
    }

    /**
     * @param string $lenguaMovAlternosProducirLa
     */
    public function setLenguaMovAlternosProducirLa($lenguaMovAlternosProducirLa)
    {
        $this->lenguaMovAlternosProducirLa = $lenguaMovAlternosProducirLa;
    }

    /**
     * @return string
     */
    public function getLenguaMovAlternosProducirKa()
    {
        return $this->lenguaMovAlternosProducirKa;
    }

    /**
     * @param string $lenguaMovAlternosProducirKa
     */
    public function setLenguaMovAlternosProducirKa($lenguaMovAlternosProducirKa)
    {
        $this->lenguaMovAlternosProducirKa = $lenguaMovAlternosProducirKa;
    }

    /**
     * @return string
     */
    public function getLenguaMovAlternosVibrar()
    {
        return $this->lenguaMovAlternosVibrar;
    }

    /**
     * @param string $lenguaMovAlternosVibrar
     */
    public function setLenguaMovAlternosVibrar($lenguaMovAlternosVibrar)
    {
        $this->lenguaMovAlternosVibrar = $lenguaMovAlternosVibrar;
    }

    /**
     * @return string
     */
    public function getLenguaAcanalarla()
    {
        return $this->lenguaAcanalarla;
    }

    /**
     * @param string $lenguaAcanalarla
     */
    public function setLenguaAcanalarla($lenguaAcanalarla)
    {
        $this->lenguaAcanalarla = $lenguaAcanalarla;
    }

    /**
     * @return string
     */
    public function getLenguaTemblores()
    {
        return $this->lenguaTemblores;
    }

    /**
     * @param string $lenguaTemblores
     */
    public function setLenguaTemblores($lenguaTemblores)
    {
        $this->lenguaTemblores = $lenguaTemblores;
    }

    /**
     * @return string
     */
    public function getLenguaObservaciones()
    {
        return $this->lenguaObservaciones;
    }

    /**
     * @param string $lenguaObservaciones
     */
    public function setLenguaObservaciones($lenguaObservaciones)
    {
        $this->lenguaObservaciones = $lenguaObservaciones;
    }

    /**
     * @return string
     */
    public function getLabiosSimetriaForma()
    {
        return $this->labiosSimetriaForma;
    }

    /**
     * @param string $labiosSimetriaForma
     */
    public function setLabiosSimetriaForma($labiosSimetriaForma)
    {
        $this->labiosSimetriaForma = $labiosSimetriaForma;
    }

    /**
     * @return string
     */
    public function getLabiosProtucion()
    {
        return $this->labiosProtucion;
    }

    /**
     * @param string $labiosProtucion
     */
    public function setLabiosProtucion($labiosProtucion)
    {
        $this->labiosProtucion = $labiosProtucion;
    }

    /**
     * @return string
     */
    public function getLabiosRetraccion()
    {
        return $this->labiosRetraccion;
    }

    /**
     * @param string $labiosRetraccion
     */
    public function setLabiosRetraccion($labiosRetraccion)
    {
        $this->labiosRetraccion = $labiosRetraccion;
    }

    /**
     * @return string
     */
    public function getLabiosAbrirCerrarBoca()
    {
        return $this->labiosAbrirCerrarBoca;
    }

    /**
     * @param string $labiosAbrirCerrarBoca
     */
    public function setLabiosAbrirCerrarBoca($labiosAbrirCerrarBoca)
    {
        $this->labiosAbrirCerrarBoca = $labiosAbrirCerrarBoca;
    }

    /**
     * @return string
     */
    public function getLabiosApretarBoca()
    {
        return $this->labiosApretarBoca;
    }

    /**
     * @param string $labiosApretarBoca
     */
    public function setLabiosApretarBoca($labiosApretarBoca)
    {
        $this->labiosApretarBoca = $labiosApretarBoca;
    }

    /**
     * @return string
     */
    public function getLabiosProduccion()
    {
        return $this->labiosProduccion;
    }

    /**
     * @param string $labiosProduccion
     */
    public function setLabiosProduccion($labiosProduccion)
    {
        $this->labiosProduccion = $labiosProduccion;
    }

    /**
     * @return string
     */
    public function getLabiosObservaciones()
    {
        return $this->labiosObservaciones;
    }

    /**
     * @param string $labiosObservaciones
     */
    public function setLabiosObservaciones($labiosObservaciones)
    {
        $this->labiosObservaciones = $labiosObservaciones;
    }

    /**
     * @return string
     */
    public function getPaladarSimetriaForma()
    {
        return $this->paladarSimetriaForma;
    }

    /**
     * @param string $paladarSimetriaForma
     */
    public function setPaladarSimetriaForma($paladarSimetriaForma)
    {
        $this->paladarSimetriaForma = $paladarSimetriaForma;
    }

    /**
     * @return string
     */
    public function getPaladarUvula()
    {
        return $this->paladarUvula;
    }

    /**
     * @param string $paladarUvula
     */
    public function setPaladarUvula($paladarUvula)
    {
        $this->paladarUvula = $paladarUvula;
    }

    /**
     * @return string
     */
    public function getPaladarMovilidadVelo()
    {
        return $this->paladarMovilidadVelo;
    }

    /**
     * @param string $paladarMovilidadVelo
     */
    public function setPaladarMovilidadVelo($paladarMovilidadVelo)
    {
        $this->paladarMovilidadVelo = $paladarMovilidadVelo;
    }

    /**
     * @return string
     */
    public function getPaladarObservaciones()
    {
        return $this->paladarObservaciones;
    }

    /**
     * @param string $paladarObservaciones
     */
    public function setPaladarObservaciones($paladarObservaciones)
    {
        $this->paladarObservaciones = $paladarObservaciones;
    }

    /**
     * @return string
     */
    public function getDientesImplantacion()
    {
        return $this->dientesImplantacion;
    }

    /**
     * @param string $dientesImplantacion
     */
    public function setDientesImplantacion($dientesImplantacion)
    {
        $this->dientesImplantacion = $dientesImplantacion;
    }

    /**
     * @return string
     */
    public function getDientesEstados()
    {
        return $this->dientesEstados;
    }

    /**
     * @param string $dientesEstados
     */
    public function setDientesEstados($dientesEstados)
    {
        $this->dientesEstados = $dientesEstados;
    }

    /**
     * @return string
     */
    public function getDientesOclusion()
    {
        return $this->dientesOclusion;
    }

    /**
     * @param string $dientesOclusion
     */
    public function setDientesOclusion($dientesOclusion)
    {
        $this->dientesOclusion = $dientesOclusion;
    }

    /**
     * @return string
     */
    public function getDientesDentaturaPostiza()
    {
        return $this->dientesDentaturaPostiza;
    }

    /**
     * @param string $dientesDentaturaPostiza
     */
    public function setDientesDentaturaPostiza($dientesDentaturaPostiza)
    {
        $this->dientesDentaturaPostiza = $dientesDentaturaPostiza;
    }

    /**
     * @return string
     */
    public function getDientesObservaciones()
    {
        return $this->dientesObservaciones;
    }

    /**
     * @param string $dientesObservaciones
     */
    public function setDientesObservaciones($dientesObservaciones)
    {
        $this->dientesObservaciones = $dientesObservaciones;
    }

    /**
     * @return string
     */
    public function getMovMaxilarDer()
    {
        return $this->movMaxilarDer;
    }

    /**
     * @param string $movMaxilarDer
     */
    public function setMovMaxilarDer($movMaxilarDer)
    {
        $this->movMaxilarDer = $movMaxilarDer;
    }

    /**
     * @return string
     */
    public function getMovMaxilarIzq()
    {
        return $this->movMaxilarIzq;
    }

    /**
     * @param string $movMaxilarIzq
     */
    public function setMovMaxilarIzq($movMaxilarIzq)
    {
        $this->movMaxilarIzq = $movMaxilarIzq;
    }

    /**
     * @return string
     */
    public function getMovMaxilarAdelante()
    {
        return $this->movMaxilarAdelante;
    }

    /**
     * @param string $movMaxilarAdelante
     */
    public function setMovMaxilarAdelante($movMaxilarAdelante)
    {
        $this->movMaxilarAdelante = $movMaxilarAdelante;
    }

    /**
     * @return string
     */
    public function getMovMaxilarRotacion()
    {
        return $this->movMaxilarRotacion;
    }

    /**
     * @param string $movMaxilarRotacion
     */
    public function setMovMaxilarRotacion($movMaxilarRotacion)
    {
        $this->movMaxilarRotacion = $movMaxilarRotacion;
    }

    /**
     * @return bool
     */
    public function isReportePacienteDeglutirVoluntario()
    {
        return $this->reportePacienteDeglutirVoluntario;
    }

    /**
     * @param bool $reportePacienteDeglutirVoluntario
     */
    public function setReportePacienteDeglutirVoluntario($reportePacienteDeglutirVoluntario)
    {
        $this->reportePacienteDeglutirVoluntario = $reportePacienteDeglutirVoluntario;
    }

    /**
     * @return bool
     */
    public function isReportePacienteDeglutirInvoluntario()
    {
        return $this->reportePacienteDeglutirInvoluntario;
    }

    /**
     * @param bool $reportePacienteDeglutirInvoluntario
     */
    public function setReportePacienteDeglutirInvoluntario($reportePacienteDeglutirInvoluntario)
    {
        $this->reportePacienteDeglutirInvoluntario = $reportePacienteDeglutirInvoluntario;
    }

    /**
     * @return string
     */
    public function getReportePacienteMasticar()
    {
        return $this->reportePacienteMasticar;
    }

    /**
     * @param string $reportePacienteMasticar
     */
    public function setReportePacienteMasticar($reportePacienteMasticar)
    {
        $this->reportePacienteMasticar = $reportePacienteMasticar;
    }

    /**
     * @return string
     */
    public function getReportePacienteCarraspear()
    {
        return $this->reportePacienteCarraspear;
    }

    /**
     * @param string $reportePacienteCarraspear
     */
    public function setReportePacienteCarraspear($reportePacienteCarraspear)
    {
        $this->reportePacienteCarraspear = $reportePacienteCarraspear;
    }

    /**
     * @return string
     */
    public function getReportePacienteCialorrea()
    {
        return $this->reportePacienteCialorrea;
    }

    /**
     * @param string $reportePacienteCialorrea
     */
    public function setReportePacienteCialorrea($reportePacienteCialorrea)
    {
        $this->reportePacienteCialorrea = $reportePacienteCialorrea;
    }

    /**
     * @return string
     */
    public function getReportePacienteReflejoPaladar()
    {
        return $this->reportePacienteReflejoPaladar;
    }

    /**
     * @param string $reportePacienteReflejoPaladar
     */
    public function setReportePacienteReflejoPaladar($reportePacienteReflejoPaladar)
    {
        $this->reportePacienteReflejoPaladar = $reportePacienteReflejoPaladar;
    }

    /**
     * @return string
     */
    public function getReportePacienteDificultadMovOrales()
    {
        return $this->reportePacienteDificultadMovOrales;
    }

    /**
     * @param string $reportePacienteDificultadMovOrales
     */
    public function setReportePacienteDificultadMovOrales($reportePacienteDificultadMovOrales)
    {
        $this->reportePacienteDificultadMovOrales = $reportePacienteDificultadMovOrales;
    }

    /**
     * @return string
     */
    public function getReportePacienteObservaciones()
    {
        return $this->reportePacienteObservaciones;
    }

    /**
     * @param string $reportePacienteObservaciones
     */
    public function setReportePacienteObservaciones($reportePacienteObservaciones)
    {
        $this->reportePacienteObservaciones = $reportePacienteObservaciones;
    }

    /**
     * @return int
     */
    public function getIdEstructuraYFuncionOral()
    {
        return $this->idEstructuraYFuncionOral;
    }

    /**
     * @param int $idEstructuraYFuncionOral
     */
    public function setIdEstructuraYFuncionOral($idEstructuraYFuncionOral)
    {
        $this->idEstructuraYFuncionOral = $idEstructuraYFuncionOral;
    }


}
