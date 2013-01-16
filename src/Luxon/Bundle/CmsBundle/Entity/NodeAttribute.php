<?php

namespace Luxon\Bundle\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NodeAttribute
 */
class NodeAttribute
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $types;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->types = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return NodeAttribute
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
     * Add types
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeType $types
     * @return NodeAttribute
     */
    public function addType(\Luxon\Bundle\CmsBundle\Entity\NodeType $types)
    {
        $this->types[] = $types;
    
        return $this;
    }

    /**
     * Remove types
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeType $types
     */
    public function removeType(\Luxon\Bundle\CmsBundle\Entity\NodeType $types)
    {
        $this->types->removeElement($types);
    }

    /**
     * Get types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attribute_values;


    /**
     * Add attribute_values
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttributeValue $attributeValues
     * @return NodeAttribute
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
}