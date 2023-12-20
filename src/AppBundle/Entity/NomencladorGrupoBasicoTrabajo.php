<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorGrupoBasicoTrabajo
 *
 * @ORM\Table(name="nomenclador_grupo_basico_trabajo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorGrupoBasicoTrabajoRepository")
 */
class NomencladorGrupoBasicoTrabajo
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
