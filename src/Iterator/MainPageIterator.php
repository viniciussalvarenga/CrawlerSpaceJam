<?php

namespace Vinic\SpaceJam\Iterator;


class MainPageIterator extends AbstractIterator
{
    public function current()
    {
        $node =  $this->iterator->current();
        $obj = new \stdClass();
        $obj->descricao = $node->getElementsByTagName('td')->item(1)->textContent;
        return $obj;
    }
}