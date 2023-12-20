<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluacionCuadro
 *
 * @ORM\Table(name="evaluacion_cuadro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvaluacionCuadroRepository")
 */
class EvaluacionCuadro
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
