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


}
