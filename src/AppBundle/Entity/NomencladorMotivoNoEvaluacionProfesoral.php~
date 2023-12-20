<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorMotivoNoEvaluacionProfesoral
 *
 * @ORM\Table(name="nomenclador_motivo_no_evaluacion_profesoral")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorMotivoNoEvaluacionProfesoralRepository")
 */
class NomencladorMotivoNoEvaluacionProfesoral
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="idExportacion", type="string", length=5, nullable=true)
     */
    private $idExportacion;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return NomencladorMotivoNoEvaluacionProfesoral
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idExportacion
     *
     * @param string $idExportacion
     *
     * @return NomencladorMotivoNoEvaluacionProfesoral
     */
    public function setIdExportacion($idExportacion)
    {
        $this->idExportacion = $idExportacion;

        return $this;
    }

    /**
     * Get idExportacion
     *
     * @return string
     */
    public function getIdExportacion()
    {
        return $this->idExportacion;
    }
}
