<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomencladorProvincia
 *
 * @ORM\Table(name="nomenclador_provincia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NomencladorProvinciaRepository")
 */
class NomencladorProvincia
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
     * @ORM\Column(name="idExportacion", type="string", length=10, nullable=true)
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
     * @return NomencladorProvincia
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
     * @return NomencladorProvincia
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
