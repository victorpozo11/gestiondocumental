<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AntecedentesPatologicos
 *
 * @ORM\Table(name="antecedentes_patologicos")
 * @ORM\Entity
 */
class AntecedentesPatologicos
{
    /**
     * @var string
     *
     * @ORM\Column(name="OIDO_SUPURACION", type="text", length=65535, nullable=true)
     */
    private $oidoSupuracion;

    /**
     * @var string
     *
     * @ORM\Column(name="OIDO_OPERACIONES", type="text", length=65535, nullable=true)
     */
    private $oidoOperaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="OIDO_MAREO", type="text", length=65535, nullable=true)
     */
    private $oidoMareo;

    /**
     * @var string
     *
     * @ORM\Column(name="NARIZ_OBSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $narizObstruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="NARIZ_TRAUMATISMO", type="text", length=65535, nullable=true)
     */
    private $narizTraumatismo;

    /**
     * @var string
     *
     * @ORM\Column(name="BOCA_ANOMALIA_PALADAR", type="text", length=65535, nullable=true)
     */
    private $bocaAnomaliaPaladar;

    /**
     * @var string
     *
     * @ORM\Column(name="BOCA_OPERACIONES", type="text", length=65535, nullable=true)
     */
    private $bocaOperaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="BOCA_DENTADURA", type="text", length=65535, nullable=true)
     */
    private $bocaDentadura;

    /**
     * @var string
     *
     * @ORM\Column(name="LARINGE_INFECCIONES", type="text", length=65535, nullable=true)
     */
    private $laringeInfecciones;

    /**
     * @var string
     *
     * @ORM\Column(name="LARINGE_OPERACIONES", type="text", length=65535, nullable=true)
     */
    private $laringeOperaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="FARINGE_INFLAMACIONES", type="text", length=65535, nullable=true)
     */
    private $faringeInflamaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="FARINGE_TUMORES", type="text", length=65535, nullable=true)
     */
    private $faringeTumores;

    /**
     * @var string
     *
     * @ORM\Column(name="FERINGE_OPERACIONES", type="text", length=65535, nullable=true)
     */
    private $feringeOperaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="ALIMENTACION", type="text", length=65535, nullable=true)
     */
    private $alimentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DEGLUCION", type="text", length=65535, nullable=true)
     */
    private $deglucion;

    /**
     * @var string
     *
     * @ORM\Column(name="OTRO", type="text", length=65535, nullable=true)
     */
    private $otro;

    /**
     * @var string
     *
     * @ORM\Column(name="TRACTO_RESPIRATIORIO_INFERIOR", type="text", length=65535, nullable=true)
     */
    private $tractoRespiratiorioInferior;

    /**
     * @var string
     *
     * @ORM\Column(name="CONVULSIONES", type="text", length=65535, nullable=true)
     */
    private $convulsiones;

    /**
     * @var string
     *
     * @ORM\Column(name="EXAMENES_Y_TRATAMIENTOS_ANTERIORES", type="text", length=65535, nullable=true)
     */
    private $examenesYTratamientosAnteriores;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ANTECEDENTES_PATOLOGICOS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAntecedentesPatologicos;

    /**
     * @return string
     */
    public function getOidoSupuracion()
    {
        return $this->oidoSupuracion;
    }

    /**
     * @param string $oidoSupuracion
     */
    public function setOidoSupuracion($oidoSupuracion)
    {
        $this->oidoSupuracion = $oidoSupuracion;
    }

    /**
     * @return string
     */
    public function getOidoOperaciones()
    {
        return $this->oidoOperaciones;
    }

    /**
     * @param string $oidoOperaciones
     */
    public function setOidoOperaciones($oidoOperaciones)
    {
        $this->oidoOperaciones = $oidoOperaciones;
    }

    /**
     * @return string
     */
    public function getOidoMareo()
    {
        return $this->oidoMareo;
    }

    /**
     * @param string $oidoMareo
     */
    public function setOidoMareo($oidoMareo)
    {
        $this->oidoMareo = $oidoMareo;
    }

    /**
     * @return string
     */
    public function getNarizObstruccion()
    {
        return $this->narizObstruccion;
    }

    /**
     * @param string $narizObstruccion
     */
    public function setNarizObstruccion($narizObstruccion)
    {
        $this->narizObstruccion = $narizObstruccion;
    }

    /**
     * @return string
     */
    public function getNarizTraumatismo()
    {
        return $this->narizTraumatismo;
    }

    /**
     * @param string $narizTraumatismo
     */
    public function setNarizTraumatismo($narizTraumatismo)
    {
        $this->narizTraumatismo = $narizTraumatismo;
    }

    /**
     * @return string
     */
    public function getBocaAnomaliaPaladar()
    {
        return $this->bocaAnomaliaPaladar;
    }

    /**
     * @param string $bocaAnomaliaPaladar
     */
    public function setBocaAnomaliaPaladar($bocaAnomaliaPaladar)
    {
        $this->bocaAnomaliaPaladar = $bocaAnomaliaPaladar;
    }

    /**
     * @return string
     */
    public function getBocaOperaciones()
    {
        return $this->bocaOperaciones;
    }

    /**
     * @param string $bocaOperaciones
     */
    public function setBocaOperaciones($bocaOperaciones)
    {
        $this->bocaOperaciones = $bocaOperaciones;
    }

    /**
     * @return string
     */
    public function getBocaDentadura()
    {
        return $this->bocaDentadura;
    }

    /**
     * @param string $bocaDentadura
     */
    public function setBocaDentadura($bocaDentadura)
    {
        $this->bocaDentadura = $bocaDentadura;
    }

    /**
     * @return string
     */
    public function getLaringeInfecciones()
    {
        return $this->laringeInfecciones;
    }

    /**
     * @param string $laringeInfecciones
     */
    public function setLaringeInfecciones($laringeInfecciones)
    {
        $this->laringeInfecciones = $laringeInfecciones;
    }

    /**
     * @return string
     */
    public function getLaringeOperaciones()
    {
        return $this->laringeOperaciones;
    }

    /**
     * @param string $laringeOperaciones
     */
    public function setLaringeOperaciones($laringeOperaciones)
    {
        $this->laringeOperaciones = $laringeOperaciones;
    }

    /**
     * @return string
     */
    public function getFaringeInflamaciones()
    {
        return $this->faringeInflamaciones;
    }

    /**
     * @param string $faringeInflamaciones
     */
    public function setFaringeInflamaciones($faringeInflamaciones)
    {
        $this->faringeInflamaciones = $faringeInflamaciones;
    }

    /**
     * @return string
     */
    public function getFaringeTumores()
    {
        return $this->faringeTumores;
    }

    /**
     * @param string $faringeTumores
     */
    public function setFaringeTumores($faringeTumores)
    {
        $this->faringeTumores = $faringeTumores;
    }

    /**
     * @return string
     */
    public function getFeringeOperaciones()
    {
        return $this->feringeOperaciones;
    }

    /**
     * @param string $feringeOperaciones
     */
    public function setFeringeOperaciones($feringeOperaciones)
    {
        $this->feringeOperaciones = $feringeOperaciones;
    }

    /**
     * @return string
     */
    public function getAlimentacion()
    {
        return $this->alimentacion;
    }

    /**
     * @param string $alimentacion
     */
    public function setAlimentacion($alimentacion)
    {
        $this->alimentacion = $alimentacion;
    }

    /**
     * @return string
     */
    public function getDeglucion()
    {
        return $this->deglucion;
    }

    /**
     * @param string $deglucion
     */
    public function setDeglucion($deglucion)
    {
        $this->deglucion = $deglucion;
    }

    /**
     * @return string
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * @param string $otro
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;
    }

    /**
     * @return string
     */
    public function getTractoRespiratiorioInferior()
    {
        return $this->tractoRespiratiorioInferior;
    }

    /**
     * @param string $tractoRespiratiorioInferior
     */
    public function setTractoRespiratiorioInferior($tractoRespiratiorioInferior)
    {
        $this->tractoRespiratiorioInferior = $tractoRespiratiorioInferior;
    }

    /**
     * @return string
     */
    public function getConvulsiones()
    {
        return $this->convulsiones;
    }

    /**
     * @param string $convulsiones
     */
    public function setConvulsiones($convulsiones)
    {
        $this->convulsiones = $convulsiones;
    }

    /**
     * @return string
     */
    public function getExamenesYTratamientosAnteriores()
    {
        return $this->examenesYTratamientosAnteriores;
    }

    /**
     * @param string $examenesYTratamientosAnteriores
     */
    public function setExamenesYTratamientosAnteriores($examenesYTratamientosAnteriores)
    {
        $this->examenesYTratamientosAnteriores = $examenesYTratamientosAnteriores;
    }

    /**
     * @return int
     */
    public function getIdAntecedentesPatologicos()
    {
        return $this->idAntecedentesPatologicos;
    }

    /**
     * @param int $idAntecedentesPatologicos
     */
    public function setIdAntecedentesPatologicos($idAntecedentesPatologicos)
    {
        $this->idAntecedentesPatologicos = $idAntecedentesPatologicos;
    }

    public function __toString()
    {
        return $this->getIdAntecedentesPatologicos()."";
    }
}
