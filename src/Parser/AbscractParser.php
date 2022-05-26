<?php

namespace Vinic\SpaceJam\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbscractParser
{
    protected $crawler;

    public function __construct($html)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }
}