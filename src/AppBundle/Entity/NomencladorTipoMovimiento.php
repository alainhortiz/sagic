<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorTipoMovimiento
 *
 * @ORM\Table(name="nomenclador_tipo_movimiento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorTipoMovimientoRepository")
 */
class NomencladorTipoMovimiento
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
