<?php

namespace App\Src;

class LoadBalancer
{
    public function __construct(array $hosts)
    {
        $this->hosts = $hosts;
    }

    public function getHosts()
    {
        return $this->hosts;
    }
    
}