<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorTipoPreparacion
 *
 * @ORM\Table(name="nomenclador_tipo_preparacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorTipoPreparacionRepository")
 */
class NomencladorTipoPreparacion
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
