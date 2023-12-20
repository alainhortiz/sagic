<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorInfraccionDisciplinaria
 *
 * @ORM\Table(name="nomenclador_infraccion_disciplinaria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorInfraccionDisciplinariaRepository")
 */
class NomencladorInfraccionDisciplinaria
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
