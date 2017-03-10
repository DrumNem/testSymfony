<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('live_homepage', new Route('/', array(
    '_controller' => 'LiveBundle:Default:index',
)));

return $collection;
