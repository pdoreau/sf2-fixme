<?php

namespace Fixme\Bundle\APYDataGridBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fixme\Bundle\APYDataGridBundle\Entity\Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $userCategories
     *
     * @ORM\OneToMany(targetEntity="UserCategory", mappedBy="category")
     */
    private $userCategories;

    public function __construct()
    {
        $this->userCategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Add userCategories
     *
     * @param Fixme\Bundle\APYDataGridBundle\Entity\UserCategory $userCategories
     */
    public function addUserCategory(\Fixme\Bundle\APYDataGridBundle\Entity\UserCategory $userCategories)
    {
        $this->userCategories[] = $userCategories;
    }

    /**
     * Get userCategories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUserCategories()
    {
        return $this->userCategories;
    }

}