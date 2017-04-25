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


}
