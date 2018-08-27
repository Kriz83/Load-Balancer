<?php

namespace App\Src\Model;

use App\Src\Model\HostInterface;
use App\Src\Model\Request;

class Host implements HostInterface
{
    public function __construct(float $load)
    {
        $this->load = $load;
    }

    public function handleRequest(Request $request): void
    {
        echo 'Request Handled by Host. Host balance: '.$this->getLoad();
    }

    public function getLoad(): float
    {
        return $this->load;
    }
    
}