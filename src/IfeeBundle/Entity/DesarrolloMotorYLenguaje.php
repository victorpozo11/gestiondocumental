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

    /**
     * @return string
     */
    public function getMotorSostenCefalico()
    {
        return $this->motorSostenCefalico;
    }

    /**
     * @param string $motorSostenCefalico
     */
    public function setMotorSostenCefalico($motorSostenCefalico)
    {
        $this->motorSostenCefalico = $motorSostenCefalico;
    }

    /**
     * @return string
     */
    public function getMotorGiros()
    {
        return $this->motorGiros;
    }

    /**
     * @param string $motorGiros
     */
    public function setMotorGiros($motorGiros)
    {
        $this->motorGiros = $motorGiros;
    }

    /**
     * @return string
     */
    public function getMotorPosicionSentada()
    {
        return $this->motorPosicionSentada;
    }

    /**
     * @param string $motorPosicionSentada
     */
    public function setMotorPosicionSentada($motorPosicionSentada)
    {
        $this->motorPosicionSentada = $motorPosicionSentada;
    }

    /**
     * @return string
     */
    public function getMotorGateo()
    {
        return $this->motorGateo;
    }

    /**
     * @param string $motorGateo
     */
    public function setMotorGateo($motorGateo)
    {
        $this->motorGateo = $motorGateo;
    }

    /**
     * @return string
     */
    public function getMotorBepedestacion()
    {
        return $this->motorBepedestacion;
    }

    /**
     * @param string $motorBepedestacion
     */
    public function setMotorBepedestacion($motorBepedestacion)
    {
        $this->motorBepedestacion = $motorBepedestacion;
    }

    /**
     * @return string
     */
    public function getMotorMarcha()
    {
        return $this->motorMarcha;
    }

    /**
     * @param string $motorMarcha
     */
    public function setMotorMarcha($motorMarcha)
    {
        $this->motorMarcha = $motorMarcha;
    }

    /**
     * @return string
     */
    public function getLenguajeSonrisaSocial()
    {
        return $this->lenguajeSonrisaSocial;
    }

    /**
     * @param string $lenguajeSonrisaSocial
     */
    public function setLenguajeSonrisaSocial($lenguajeSonrisaSocial)
    {
        $this->lenguajeSonrisaSocial = $lenguajeSonrisaSocial;
    }

    /**
     * @return string
     */
    public function getLenguajeBalbuceo()
    {
        return $this->lenguajeBalbuceo;
    }

    /**
     * @param string $lenguajeBalbuceo
     */
    public function setLenguajeBalbuceo($lenguajeBalbuceo)
    {
        $this->lenguajeBalbuceo = $lenguajeBalbuceo;
    }

    /**
     * @return string
     */
    public function getLenguajeFrases()
    {
        return $this->lenguajeFrases;
    }

    /**
     * @param string $lenguajeFrases
     */
    public function setLenguajeFrases($lenguajeFrases)
    {
        $this->lenguajeFrases = $lenguajeFrases;
    }

    /**
     * @return string
     */
    public function getLenguajeComunicaActualmente()
    {
        return $this->lenguajeComunicaActualmente;
    }

    /**
     * @param string $lenguajeComunicaActualmente
     */
    public function setLenguajeComunicaActualmente($lenguajeComunicaActualmente)
    {
        $this->lenguajeComunicaActualmente = $lenguajeComunicaActualmente;
    }

    /**
     * @return string
     */
    public function getLenguajeGorgeo()
    {
        return $this->lenguajeGorgeo;
    }

    /**
     * @param string $lenguajeGorgeo
     */
    public function setLenguajeGorgeo($lenguajeGorgeo)
    {
        $this->lenguajeGorgeo = $lenguajeGorgeo;
    }

    /**
     * @return string
     */
    public function getLenguajePrimeraPalabra()
    {
        return $this->lenguajePrimeraPalabra;
    }

    /**
     * @param string $lenguajePrimeraPalabra
     */
    public function setLenguajePrimeraPalabra($lenguajePrimeraPalabra)
    {
        $this->lenguajePrimeraPalabra = $lenguajePrimeraPalabra;
    }

    /**
     * @return string
     */
    public function getLenguajeOraciones()
    {
        return $this->lenguajeOraciones;
    }

    /**
     * @param string $lenguajeOraciones
     */
    public function setLenguajeOraciones($lenguajeOraciones)
    {
        $this->lenguajeOraciones = $lenguajeOraciones;
    }

    /**
     * @return int
     */
    public function getIdDesarrolloMotor()
    {
        return $this->idDesarrolloMotor;
    }

    /**
     * @param int $idDesarrolloMotor
     */
    public function setIdDesarrolloMotor($idDesarrolloMotor)
    {
        $this->idDesarrolloMotor = $idDesarrolloMotor;
    }


}
