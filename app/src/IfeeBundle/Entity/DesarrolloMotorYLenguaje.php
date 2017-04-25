<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DesarrolloMotorYLenguaje
 *
 * @ORM\Table(name="desarrollo_motor_y_lenguaje")
 * @ORM\Entity
 */
class DesarrolloMotorYLenguaje
{
    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_SOSTEN_CEFALICO", type="text", length=65535, nullable=true)
     */
    private $motorSostenCefalico;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_GIROS", type="text", length=65535, nullable=true)
     */
    private $motorGiros;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_POSICION_SENTADA", type="text", length=65535, nullable=true)
     */
    private $motorPosicionSentada;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_GATEO", type="text", length=65535, nullable=true)
     */
    private $motorGateo;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_BEPEDESTACION", type="text", length=65535, nullable=true)
     */
    private $motorBepedestacion;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_MARCHA", type="text", length=65535, nullable=true)
     */
    private $motorMarcha;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_SONRISA_SOCIAL", type="text", length=65535, nullable=true)
     */
    private $lenguajeSonrisaSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_BALBUCEO", type="text", length=65535, nullable=true)
     */
    private $lenguajeBalbuceo;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_FRASES", type="text", length=65535, nullable=true)
     */
    private $lenguajeFrases;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_COMUNICA_ACTUALMENTE", type="text", length=65535, nullable=true)
     */
    private $lenguajeComunicaActualmente;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_GORGEO", type="text", length=65535, nullable=true)
     */
    private $lenguajeGorgeo;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_PRIMERA_PALABRA", type="text", length=65535, nullable=true)
     */
    private $lenguajePrimeraPalabra;

    /**
     * @var string
     *
     * @ORM\Column(name="LENGUAJE_ORACIONES", type="text", length=65535, nullable=true)
     */
    private $lenguajeOraciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DESARROLLO_MOTOR", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDesarrolloMotor;


}
