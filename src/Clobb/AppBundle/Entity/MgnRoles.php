<?php

namespace Clobb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MgnRoles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Clobb\AppBundle\Repository\MgnRolesRepository")
 */
class MgnRoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="role_key", type="string", length=20)
     */
    private $roleKey;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MgnRoles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set roleKey
     *
     * @param string $roleKey
     * @return MgnRoles
     */
    public function setRoleKey($roleKey)
    {
        $this->roleKey = $roleKey;

        return $this;
    }

    /**
     * Get roleKey
     *
     * @return string 
     */
    public function getRoleKey()
    {
        return $this->roleKey;
    }
}
