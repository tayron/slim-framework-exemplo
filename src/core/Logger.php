<?php
namespace Core;

use Monolog\Logger as MonoLogger;

class Logger 
{
    private $logger;
    
    public function __construct(MonoLogger $logger)
    {
        $this->logger = $logger;
    }
    
    public function write($message)
    {
        $this->logger->error($message);
    }
}
