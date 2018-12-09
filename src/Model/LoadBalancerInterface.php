<?php

namespace App\Src\Model;

interface LoadBalancerInterface
{  
    public function handleRequest(Request $request): void;
}