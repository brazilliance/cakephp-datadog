<?php
namespace CakePHP_DataDog\Services;

use GuzzleHttp\Client;

class DataDogService
{
    public function info()
    {
        debug('Setting up DataDog.');
        $client = new Client();
        debug($client);
    }
}