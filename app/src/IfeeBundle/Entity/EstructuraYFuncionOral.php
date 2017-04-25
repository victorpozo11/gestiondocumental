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


}
