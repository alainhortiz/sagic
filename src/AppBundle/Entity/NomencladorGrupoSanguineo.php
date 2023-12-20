<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorGrupoSanguineo
 *
 * @ORM\Table(name="nomenclador_grupo_sanguineo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorGrupoSanguineoRepository")
 */
class NomencladorGrupoSanguineo
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
