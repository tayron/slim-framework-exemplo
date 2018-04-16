<?php
namespace Core;

use Monolog\Logger;

class Logger 
{
    private $logger;
    
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public function write($message)
    {
        $this->logger->error($message);
    }
}
