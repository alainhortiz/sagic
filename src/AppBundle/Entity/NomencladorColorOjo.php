<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorColorOjo
 *
 * @ORM\Table(name="nomenclador_color_ojo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorColorOjoRepository")
 */
class NomencladorColorOjo
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
