<?php

namespace App\Src;

class HostCollector
{
    private $hostCollection = [];

    public function loadHost($host)
    {
        return $this->hostCollection[] = $host;
    }
    
    public function getHosts()
    {
        return $this->hostCollection;
    }
    
}