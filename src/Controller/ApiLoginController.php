<?php

namespace App\Controller;

use App\DTO\Test;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use JetBrains\PhpStorm\Pure;

class ApiLoginController extends AbstractFOSRestController
{
    public function __construct()
    {
    }

    #[Pure] #[Get('test')]
    public function index(): Test
    {
        return new Test( id:4,name: 'cxz');
    }
}
