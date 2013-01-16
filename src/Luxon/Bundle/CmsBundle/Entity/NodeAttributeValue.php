<?php

namespace Luxon\Bundle\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NodeAttributeValue
 */
class NodeAttributeValue
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var \Luxon\Bundle\CmsBundle\Entity\Node
     */
    private $node;

    /**
     * @var \Luxon\Bundle\CmsBundle\Entity\NodeAttribute
     */
    private $attribute;


    /**
     * Set value
     *
     * @param string $value
     * @return NodeAttributeValue
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set node
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\Node $node
     * @return NodeAttributeValue
     */
    public function setNode(\Luxon\Bundle\CmsBundle\Entity\Node $node)
    {
        $this->node = $node;
    
        return $this;
    }

    /**
     * Get node
     *
     * @return \Luxon\Bundle\CmsBundle\Entity\Node 
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Set attribute
     *
     * @param \Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attribute
     * @return NodeAttributeValue
     */
    public function setAttribute(\Luxon\Bundle\CmsBundle\Entity\NodeAttribute $attribute)
    {
        $this->attribute = $attribute;
    
        return $this;
    }

    /**
     * Get attribute
     *
     * @return \Luxon\Bundle\CmsBundle\Entity\NodeAttribute 
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
