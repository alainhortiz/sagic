<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorFacultad
 *
 * @ORM\Table(name="nomenclador_facultad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorFacultadRepository")
 */
class NomencladorFacultad
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
     * @ORM\Column(name="idExportacion", type="string", length=2, nullable=true)
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
     * @return NomencladorFacultad
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
     * @return NomencladorFacultad
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
