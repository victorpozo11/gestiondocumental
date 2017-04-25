<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaLogopedica
 *
 * @ORM\Table(name="ficha_logopedica")
 * @ORM\Entity
 */
class FichaLogopedica
{
    /**
     * @var string
     *
     * @ORM\Column(name="MOTIVO_CONSULTA", type="text", length=65535, nullable=true)
     */
    private $motivoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA_VOZ", type="text", length=65535, nullable=true)
     */
    private $caracteristicaVoz;

    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA_RESPIRACION", type="text", length=65535, nullable=true)
     */
    private $caracteristicaRespiracion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESPITAJE_AUDICION", type="text", length=65535, nullable=true)
     */
    private $despitajeAudicion;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPRESION_DIAGNOSTICA", type="text", length=65535, nullable=true)
     */
    private $impresionDiagnostica;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="RECOMENDACIONES", type="text", length=65535, nullable=true)
     */
    private $recomendaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LOGOPEDICA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogopedica;

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
    public function getCaracteristicaVoz()
    {
        return $this->caracteristicaVoz;
    }

    /**
     * @param string $caracteristicaVoz
     */
    public function setCaracteristicaVoz($caracteristicaVoz)
    {
        $this->caracteristicaVoz = $caracteristicaVoz;
    }

    /**
     * @return string
     */
    public function getCaracteristicaRespiracion()
    {
        return $this->caracteristicaRespiracion;
    }

    /**
     * @param string $caracteristicaRespiracion
     */
    public function setCaracteristicaRespiracion($caracteristicaRespiracion)
    {
        $this->caracteristicaRespiracion = $caracteristicaRespiracion;
    }

    /**
     * @return string
     */
    public function getDespitajeAudicion()
    {
        return $this->despitajeAudicion;
    }

    /**
     * @param string $despitajeAudicion
     */
    public function setDespitajeAudicion($despitajeAudicion)
    {
        $this->despitajeAudicion = $despitajeAudicion;
    }

    /**
     * @return string
     */
    public function getImpresionDiagnostica()
    {
        return $this->impresionDiagnostica;
    }

    /**
     * @param string $impresionDiagnostica
     */
    public function setImpresionDiagnostica($impresionDiagnostica)
    {
        $this->impresionDiagnostica = $impresionDiagnostica;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return string
     */
    public function getRecomendaciones()
    {
        return $this->recomendaciones;
    }

    /**
     * @param string $recomendaciones
     */
    public function setRecomendaciones($recomendaciones)
    {
        $this->recomendaciones = $recomendaciones;
    }

    /**
     * @return int
     */
    public function getIdLogopedica()
    {
        return $this->idLogopedica;
    }

    /**
     * @param int $idLogopedica
     */
    public function setIdLogopedica($idLogopedica)
    {
        $this->idLogopedica = $idLogopedica;
    }


}
