<?php

namespace Vinic\SpaceJam\Traits;

use Forseti\Logger\Logger;
use Psr\Log\LoggerTrait;

trait ForsetiLoggerTrait
{
    use LoggerTrait;

    public function log($level, $message, array $context = array())
    {
        return (new Logger(get_class($this)))->log($level, $message, $context);
    }
}
