<?php

namespace App\Src\Model;

class LoadBalancer implements LoadBalancerInterface
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