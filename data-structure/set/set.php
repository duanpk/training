<?php

namespace Structure\Set;

class Set
{
    private $elements;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function add($element)
    {
        if (!$this->contains($element)) {
            $this->elements[] = $element;
        }
    }

    public function remove($element)
    {
        $key = array_search($element, $this->elements);
        if ($key !== false) {
            unset($this->elements[$key]);
        }
    }

    public function contains($element)
    {
        return in_array($element, $this->elements);
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function print()
    {
        foreach ($this->elements as $item) {
            echo $item . ', ';
        }
    }
}
