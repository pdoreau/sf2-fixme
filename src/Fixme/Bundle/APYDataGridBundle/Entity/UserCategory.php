<?php

namespace Fixme\Bundle\APYDataGridBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fixme\Bundle\APYDataGridBundle\Entity\UserCategory
 *
 * @ORM\Table(name="user_category")
 * @ORM\Entity
 */
class UserCategory
{
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userCategories")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $user;

     /**
     * @var Category $categorie
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="userCategories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $category;

     /**
     * @var string $addedBy
     *
     * @ORM\Column(name="added_by", type="string", length=25, nullable=true)
     */
    private $addedBy;

    /**
     * Set addedBy
     *
     * @param string $addedBy
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;
    }

    /**
     * Get addedBy
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set user
     *
     * @param Fixme\Bundle\APYDataGridBundle\Entity\User $user
     */
    public function setUser(\Fixme\Bundle\APYDataGridBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Fixme\Bundle\APYDataGridBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param Fixme\Bundle\APYDataGridBundle\Entity\Category $category
     */
    public function setCategory(\Fixme\Bundle\APYDataGridBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Fixme\Bundle\APYDataGridBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}