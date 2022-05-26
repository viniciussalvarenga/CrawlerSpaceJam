<?php

namespace Vinic\SpaceJam\Factory;

use GuzzleHttp\Client;
use Vinic\SpaceJam\Enums\Urls;

class GuzzleClientFactory
{
    public static function getInstance()
    {
        $config = [
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => Urls::USER_AGENT
            ]
        ];
        return new Client($config);
}
}