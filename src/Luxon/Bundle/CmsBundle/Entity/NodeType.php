<?php

namespace Luxon\Bundle\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NodeType
 */
class NodeType
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
    private $nodes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nodes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attributes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return NodeType
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
     * Add nodes
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $nodes
     * @return NodeType
     */
    public function addNode(\Luxon\Bundle\CmsBundle\Entity\Node $nodes)
    {
        $this->nodes[] = $nodes;
    
        return $this;
    }

    /**
     * Remove nodes
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $nodes
     */
    public function removeNode(\Luxon\Bundle\CmsBundle\Entity\Node $nodes)
    {
        $this->nodes->removeElement($nodes);
    }

    /**
     * Get nodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Add attributes
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attributes
     * @return NodeType
     */
    public function addAttribute(\Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attributes)
    {
        $this->attributes[] = $attributes;
    
        return $this;
    }

    /**
     * Remove attributes
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attributes
     */
    public function removeAttribute(\Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attributes)
    {
        $this->attributes->removeElement($attributes);
    }

    /**
     * Get attributes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
