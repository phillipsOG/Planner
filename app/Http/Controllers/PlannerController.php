<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use Illuminate\View\View;
use Monolog\Logger;

class PlannerController extends BaseController
{
    private Client $client;

    public function __construct()
    {
        //todo load code
    }
}
