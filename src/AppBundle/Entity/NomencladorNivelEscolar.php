<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorNivelEscolar
 *
 * @ORM\Table(name="nomenclador_nivel_escolar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorNivelEscolarRepository")
 */
class NomencladorNivelEscolar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
