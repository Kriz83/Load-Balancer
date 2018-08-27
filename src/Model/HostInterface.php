<?php

namespace App\Src\Model;

interface HostInterface
{

    public function handleRequest(Request $request): void;

    public function getLoad(): float;
    
}