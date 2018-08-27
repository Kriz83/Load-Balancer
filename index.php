<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Model\Host;
use App\Src\Model\HostCollector;
use App\Src\Model\LoadBalancer;
use App\Src\Model\Request;


//test loadBalancer

//create HostCollector instance
$hostCollector = new HostCollector();

//create Hosts with random values (0-1)
for ($i = 0; $i < 6; $i++) {
    $host{$i} = new Host(floatVal('0.'.rand(0, 99)));
    //load host to collector
    $hostCollector->loadHost($host{$i});
    echo $host{$i}->getLoad().'<br>';
}

//get Request
$request = new Request();

//use loadBalancer (Collection of Hosts, alghoritm type)
$loadBalancer = new LoadBalancer($hostCollector, 2);

$loadBalancer->handleRequest($request);
