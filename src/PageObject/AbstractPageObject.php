<?php

namespace Vinic\SpaceJam\PageObject;

use Vinic\SpaceJam\Traits\ForsetiLoggerTrait;
use GuzzleHttp\ClientInterface;
use Vinic\SpaceJam\Factory\GuzzleClientFactory;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ? $client : GuzzleClientFactory::getInstance();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (\Exception $e) {
            $this->error($e->getMessage());
            return null;
        }
    }
}