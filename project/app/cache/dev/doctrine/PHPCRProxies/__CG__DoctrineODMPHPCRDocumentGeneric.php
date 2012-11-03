<?php

namespace PHPCRProxies\__CG__\Doctrine\ODM\PHPCR\Document;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE PHPCR-ODM. DO NOT EDIT THIS FILE.
 */
class Generic extends \Doctrine\ODM\PHPCR\Document\Generic implements \Doctrine\ODM\PHPCR\Proxy\Proxy
{
    private $__doctrineDocumentManager__;
    private $__isInitialized__ = false;
    private $__identifier__;
    private $__unsetAttributes__;

    public function __construct($documentManager, $identifier)
    {
        unset($this->referrers, $this->children, $this->parent, $this->node, $this->nodename, $this->id);
        $this->__unsetAttributes__ = array (
  0 => 'referrers',
  1 => 'children',
  2 => 'parent',
  3 => 'node',
  4 => 'nodename',
  5 => 'id',
);
        $this->__doctrineDocumentManager__ = $documentManager;
        $this->__identifier__ = $identifier;
    }

    public function __load()
    {
        if (!$this->__isInitialized__ && $this->__doctrineDocumentManager__) {
            $this->__isInitialized__ = true;
            $this->__doctrineDocumentManager__->getRepository(get_class($this))->refreshDocumentForProxy($this);
            unset($this->__doctrineDocumentManager__);
        }
    }
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getNode()
    {
        $this->__load();
        return parent::getNode();
    }

    public function getNodename()
    {
        $this->__load();
        return parent::getNodename();
    }

    public function setNodename($name)
    {
        $this->__load();
        return parent::setNodename($name);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function setParent($parent)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }

    public function setChildren(\Doctrine\Common\Collections\ArrayCollection $children)
    {
        $this->__load();
        return parent::setChildren($children);
    }

    public function addChild($child)
    {
        $this->__load();
        return parent::addChild($child);
    }

    public function getReferrers()
    {
        $this->__load();
        return parent::getReferrers();
    }

    public function setReferrers(\Doctrine\Common\Collections\ArrayCollection $referrers)
    {
        $this->__load();
        return parent::setReferrers($referrers);
    }

    public function addReferrer($referrer)
    {
        $this->__load();
        return parent::addReferrer($referrer);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function __sleep()
    {
        return array('__isInitialized__', );
    }

    public function __getIdentifier()
    {
        return $this->__identifier__;
    }

    public function __setIdentifier($identifier)
    {
        $this->__identifier__ = $identifier;
    }

    public function __isset($name)
    {
        return in_array($name, $this->__unsetAttributes__);
    }

    public function __set($name, $value)
    {
        $this->__load();
        $this->$name = $value;
    }

    public function &__get($name)
    {
        $this->__load();
        return $this->$name;
    }

    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }
}