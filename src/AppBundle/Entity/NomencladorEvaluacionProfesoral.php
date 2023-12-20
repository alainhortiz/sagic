<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorEvaluacionProfesoral
 *
 * @ORM\Table(name="nomenclador_evaluacion_profesoral")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorEvaluacionProfesoralRepository")
 */
class NomencladorEvaluacionProfesoral
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
