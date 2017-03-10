<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('input_homepage', new Route('/', array(
    '_controller' => 'InputBundle:Default:index',
)));

return $collection;
