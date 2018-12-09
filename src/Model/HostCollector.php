<?php

namespace App\Src\Model;

class HostCollector
{
    private $hostCollection = [];

    public function loadHost(Host $host)
    {
        return $this->hostCollection[] = $host;
    }
    
    public function getHosts(): array
    {
        return $this->hostCollection;
    }
    
}