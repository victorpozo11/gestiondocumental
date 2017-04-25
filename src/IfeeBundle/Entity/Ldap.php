<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ldap
 *
 * @ORM\Table(name="ldap")
 * @ORM\Entity
 */
class Ldap
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="text", length=65535, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="PUERTO", type="text", length=65535, nullable=true)
     */
    private $puerto;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMONIO", type="text", length=65535, nullable=true)
     */
    private $domonio;

    /**
     * @var string
     *
     * @ORM\Column(name="BASEDN", type="text", length=65535, nullable=true)
     */
    private $basedn;

    /**
     * @var string
     *
     * @ORM\Column(name="USER", type="text", length=65535, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="PASS", type="text", length=65535, nullable=true)
     */
    private $pass;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LDAP", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLdap;

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getPuerto()
    {
        return $this->puerto;
    }

    /**
     * @param string $puerto
     */
    public function setPuerto($puerto)
    {
        $this->puerto = $puerto;
    }

    /**
     * @return string
     */
    public function getDomonio()
    {
        return $this->domonio;
    }

    /**
     * @param string $domonio
     */
    public function setDomonio($domonio)
    {
        $this->domonio = $domonio;
    }

    /**
     * @return string
     */
    public function getBasedn()
    {
        return $this->basedn;
    }

    /**
     * @param string $basedn
     */
    public function setBasedn($basedn)
    {
        $this->basedn = $basedn;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return int
     */
    public function getIdLdap()
    {
        return $this->idLdap;
    }

    /**
     * @param int $idLdap
     */
    public function setIdLdap($idLdap)
    {
        $this->idLdap = $idLdap;
    }


}
