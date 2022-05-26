<?php

namespace Vinic\SpaceJam\PageObject;

use Exception;
use Vinic\SpaceJam\Enums\Urls;
use Vinic\SpaceJam\Parser\MainPageParser;

class MainPageObject extends AbstractPageObject
{
    /**
     * @throws Exception
     */
    public function getMapResponse()
    {
        $response = $this->request('GET',Urls::SPACE_PAGE);
        return new MainPageParser($response->getBody()->getContents());
    }

    public function getResponse($href)
    {
        $response = $this->request('GET',Urls::SPACE_PAGE.$href);
        return new MainPageParser($response->getBody()->getContents());
    }


}