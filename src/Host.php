<?php

namespace App\Src;

class Host
{
    public function __construct($load)
    {
        $this->load = $load;
    }

    public function handleRequest(): void
    {
        return;
    }

    public function getLoad(): float
    {
        return $this->load;
    }
    
}