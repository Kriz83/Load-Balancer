<?php

namespace App\Src\Model;

class Host implements HostInterface
{
    public function __construct(float $load)
    {
        $this->load = $load;
    }

    public function handleRequest(Request $request): void
    {
        /*
        * view effect only
        echo 'Request Handled by Host. Host balance: '.$this->getLoad();
        */
    }

    public function getLoad(): float
    {
        return $this->load;
    }
    
}