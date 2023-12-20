<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorLimitacionFisica
 *
 * @ORM\Table(name="nomenclador_limitacion_fisica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorLimitacionFisicaRepository")
 */
class NomencladorLimitacionFisica
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
