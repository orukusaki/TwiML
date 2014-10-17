<?php

namespace Orukusaki\TwiML;

use DOMDocument;

/**
 * Class Node
 * @package Orukusaki\TwiML
 */
abstract class Node
{
    /**
     * @var Node
     */
    protected $parent;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var Node[]
     */
    protected $children = [];

    /**
     * @param Node        $parent
     * @param string|null $content
     */
    public function __construct(Node $parent = null, $content = null)
    {
        if ($parent) {
            $parent->addChild($this);
            $this->parent = $parent;
        }
        $this->content = $content;
    }

    /**
     * @param array $attributes
     *
     * @api
     */
    public function with(array $attributes)
    {
        $this->attributes = array_merge($this->attributes, $attributes);
    }

    /**
     * @return mixed
     */
    protected function getTagName()
    {
        $classParts = explode('\\', get_class($this));

        return array_pop($classParts);
    }

    /**
     * @param DOMDocument $document
     *
     * @return \DOMElement
     */
    protected function asXml(DomDocument $document)
    {
        $root = $document->createElement($this->getTagName(), $this->content);
        $document->appendChild($root);

        foreach ($this->attributes as $name => $value) {
            $root->setAttribute($name, $value);
        }

        foreach ($this->children as $child) {
            $root->appendChild($child->asXml($document));
        }

        return $root;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->parent) {
            return (string) $this->parent;
        }
        $doc = new DomDocument();
        $doc->appendChild($this->asXml($doc));

        return $doc->saveXml();
    }

    /**
     * @param Node $node
     */
    protected function addChild(Node $node)
    {
        $this->children[] = $node;
    }

    /**
     * @return Node
     *
     * @api
     */
    public function end()
    {
        return $this->parent;
    }
}
