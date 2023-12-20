<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpedienteProfesor
 *
 * @ORM\Table(name="expediente_profesor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpedienteProfesorRepository")
 */
class ExpedienteProfesor
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
