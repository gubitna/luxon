<?php

namespace Luxon\Bundle\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Node
 */
class Node
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attribute_values;

    /**
     * @var \Luxon\Bundle\CmsBundle\Entity\NodeType
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attribute_values = new \Doctrine\Common\Collections\ArrayCollection();
        $this->parents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add attribute_values
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttributeValue $attributeValues
     * @return Node
     */
    public function addAttributeValue(\Luxon\Bundle\CmsBundle\Entity\NodeAttributeValue $attributeValues)
    {
        $this->attribute_values[] = $attributeValues;
    
        return $this;
    }

    /**
     * Remove attribute_values
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttributeValue $attributeValues
     */
    public function removeAttributeValue(\Luxon\Bundle\CmsBundle\Entity\NodeAttributeValue $attributeValues)
    {
        $this->attribute_values->removeElement($attributeValues);
    }

    /**
     * Get attribute_values
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributeValues()
    {
        return $this->attribute_values;
    }

    /**
     * Set type
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeType $type
     * @return Node
     */
    public function setType(\Luxon\Bundle\CmsBundle\Entity\NodeType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \Luxon\Bundle\CmsBundle\Entity\NodeType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add parents
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $parents
     * @return Node
     */
    public function addParent(\Luxon\Bundle\CmsBundle\Entity\Node $parents)
    {
        $this->parents[] = $parents;
    
        return $this;
    }

    /**
     * Remove parents
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $parents
     */
    public function removeParent(\Luxon\Bundle\CmsBundle\Entity\Node $parents)
    {
        $this->parents->removeElement($parents);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add child
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $children
     * @return Node
     */
    public function addChild(\Luxon\Bundle\CmsBundle\Entity\Node $child)
    {
        $this->children[] = $child;
    
        return $this;
    }

    /**
     * Remove child
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $children
     */
    public function removeChild(\Luxon\Bundle\CmsBundle\Entity\Node $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }
}
