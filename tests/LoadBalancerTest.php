<?php

use PHPUnit\Framework\TestCase;
use App\Src\LoadBalancer;

final class LoadBalancerTest extends TestCase
{
    public function testDoesFunctionReturnArray(): void
    {
        $hosts = ['host1' => 78,'host2' => 63,'host3' => 55];

        $loadBalancer = new LoadBalancer($hosts);

        $this->assertTrue(getType($loadBalancer->getHosts()) === 'array');
    }

    /*
    public function testCanLoadBalancerLoadHost(): void
    {
    }
    */
}