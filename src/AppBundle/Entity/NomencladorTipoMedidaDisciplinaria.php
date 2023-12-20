<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorTipoMedidaDisciplinaria
 *
 * @ORM\Table(name="nomenclador_tipo_medida_disciplinaria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorTipoMedidaDisciplinariaRepository")
 */
class NomencladorTipoMedidaDisciplinaria
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
