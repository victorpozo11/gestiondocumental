<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sexo
 *
 * @ORM\Table(name="sexo")
 * @ORM\Entity
 */
class Sexo
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEXO", type="text", length=65535, nullable=true)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SEXO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSexo;

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return int
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * @param int $idSexo
     */
    public function setIdSexo($idSexo)
    {
        $this->idSexo = $idSexo;
    }


}
