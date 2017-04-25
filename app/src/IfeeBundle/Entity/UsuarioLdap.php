<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioLdap
 *
 * @ORM\Table(name="usuario_ldap")
 * @ORM\Entity
 */
class UsuarioLdap
{
    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="text", length=65535, nullable=true)
     */
    private $usuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO_LDAP", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuarioLdap;


}
