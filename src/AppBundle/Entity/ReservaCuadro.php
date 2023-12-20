<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservaCuadro
 *
 * @ORM\Table(name="reserva_cuadro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservaCuadroRepository")
 */
class ReservaCuadro
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
