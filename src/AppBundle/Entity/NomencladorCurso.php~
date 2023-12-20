<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorCurso
 *
 * @ORM\Table(name="nomenclador_curso")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorCursoRepository")
 */
class NomencladorCurso
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
     * @var int
     *
     * @ORM\Column(name="idExportacion", type="integer", nullable=true)
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
     * @return NomencladorCurso
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
     * @param integer $idExportacion
     *
     * @return NomencladorCurso
     */
    public function setIdExportacion($idExportacion)
    {
        $this->idExportacion = $idExportacion;

        return $this;
    }

    /**
     * Get idExportacion
     *
     * @return integer
     */
    public function getIdExportacion()
    {
        return $this->idExportacion;
    }
}
