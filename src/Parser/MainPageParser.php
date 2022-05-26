<?php

namespace Vinic\SpaceJam\Parser;

use Vinic\SpaceJam\Iterator\MainPageIterator;

class MainPageParser extends AbscractParser
{
    public function getIterator()
    {
        return new MainPageIterator($this->crawler->filterXPath("//body//center/table//tr"));

    }

    public function getMapIterator()
    {
        return $this->crawler->filterXPath("//body//table[2]//tr[5]//td[3]//a")->attr('href');
    }
}
