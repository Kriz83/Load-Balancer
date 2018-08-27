<?php

namespace App\Src\Model;

use App\Src\Model\HostCollector;
use App\Src\Model\Request;
use App\Src\Model\LoadAlgorithm;

class LoadBalancer
{
    private $hostCollection;
    private $balanceType;

    public function __construct(HostCollector $hostCollection, $algorithmType)
    {
        $this->hostCollection = $hostCollection;
        $this->algorithmType = $algorithmType;
        $this->loadAlgorithm = new LoadAlgorithm($algorithmType);
    }

    
    public function handleRequest(Request $request): void
    {
        $this->loadAlgorithm->useBalanceType($this->hostCollection, $request);
    }
    
}