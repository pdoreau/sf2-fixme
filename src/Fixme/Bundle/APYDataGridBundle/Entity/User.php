<?php

namespace Fixme\Bundle\APYDataGridBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * Fixme\Bundle\APYDataGridBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @GRID\Source(columns="id,lastname,userCategories.category.name:GroupConcat,service.name", groupBy={"id"})
 * @ORM\Entity
 */
class User
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
     * @var string $lastname
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $userCategories
     *
     * @ORM\OneToMany(targetEntity="UserCategory", mappedBy="user")
     * 
     * @GRID\Column(field="userCategories.category.name:GroupConcat", title="Categories", filter="select", selectMulti="true")
     */
    private $userCategories;

    /**
     * @var Service $service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     *
     * @GRID\Column(field="service.name", title="Service Name", filter="select")
     */
    private $service;

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
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set amfCertified
     *
     * @param boolean $amfCertified
     */
    public function setAmfCertified($amfCertified)
    {
        $this->amfCertified = $amfCertified;
    }

    /**
     * Get amfCertified
     *
     * @return boolean
     */
    public function getAmfCertified()
    {
        return $this->amfCertified;
    }

    /**
     * Add adminCategories
     *
     * @param Fixme\Bundle\APYDataGridBundle\Entity\Category $adminCategories
     */
    public function addCategory(\Fixme\Bundle\APYDataGridBundle\Entity\Category $adminCategories)
    {
        $this->adminCategories[] = $adminCategories;
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

    /**
     * Set service
     *
     * @param Fixme\Bundle\APYDataGridBundle\Entity\Service $service
     */
    public function setService(\Fixme\Bundle\APYDataGridBundle\Entity\Service $service)
    {
        $this->service = $service;
    }

    /**
     * Get service
     *
     * @return Fixme\Bundle\APYDataGridBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

}