<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="nombre", type="string", length=100, unique=true)
     */
    private $nombre;

    /**
     * @ORM\ManyToMany(targetEntity="Permiso")
     * @ORM\JoinTable(name="role_permiso",
     *     joinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="permiso_id", referencedColumnName="id")}
     * )
     */
    private $role_permisos;

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
     * @return Role
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
     * Constructor
     */
    public function __construct()
    {
        $this->role_permisos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rolePermiso
     *
     * @param \AppBundle\Entity\Permiso $rolePermiso
     *
     * @return Role
     */
    public function addRolePermiso(\AppBundle\Entity\Permiso $rolePermiso)
    {
        $this->role_permisos[] = $rolePermiso;

        return $this;
    }

    /**
     * Remove rolePermiso
     *
     * @param \AppBundle\Entity\Permiso $rolePermiso
     */
    public function removeRolePermiso(\AppBundle\Entity\Permiso $rolePermiso)
    {
        $this->role_permisos->removeElement($rolePermiso);
    }

    /**
     * Get rolePermisos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRolePermisos()
    {
        return $this->role_permisos;
    }
}
