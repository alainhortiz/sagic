<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorColorPelo
 *
 * @ORM\Table(name="nomenclador_color_pelo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorColorPeloRepository")
 */
class NomencladorColorPelo
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
