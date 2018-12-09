<?php

namespace App\Src\Model;

class LoadAlgorithm
{
    private $balanceType;
    private $request;

    public function __construct(int $balanceType)
    {
        $this->balanceType = $balanceType;
        $this->request = new Request;
    } 
    
    public function useBalanceType(HostCollector $hostCollection): void
    {        
        if ($this->balanceType === 1) {      
            $this->getFirstBalanceType($hostCollection);
        } else {
            $this->getSecondBalanceType($hostCollection);
        }
    }

    public function getFirstBalanceType($hostCollection): void
    {        
        $hosts = $hostCollection->getHosts();
        /*
        * view load effect
        foreach($hosts as $host)
        {
            echo $host->handleRequest($this->request).'<br>';
        }
        */
    }
    
    public function getSecondBalanceType($hostCollection): void
    {
        $hosts = $hostCollection->getHosts();
        $loadOver75 = false;
        $lowLoadHost = null;

        foreach($hosts as $host)
        {
            //get low level load host (to use when max load is under 0,75 (avoid 0 - no load obviously))
            if ((!$lowLoadHost || $lowLoadHost->getLoad() > $host->getLoad()) && $lowLoadHost !== 0) {
                $lowLoadHost = $host;
            }

            if ($host->getLoad() >= 0.75) {
                $host->handleRequest($this->request);
                //found load over 75               
                $loadOver75 = true;
                break;
            }
        }
        //if all loads are under 0,75
        if (!$loadOver75) {
            
        /*
        * view load effect
            echo '<label style="color:darkgreen;font-weight: bold;">Low load level: </label><br>';
        */
            $lowLoadHost->handleRequest($this->request);
        }
    }

}