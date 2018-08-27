<?php

namespace App\Src\Model;

use App\Src\Model\Host;

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