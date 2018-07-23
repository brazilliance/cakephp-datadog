<?php
namespace CakePHP_DataDog\App\Services;

use GuzzleHttp;

class DataDogService
{
    public function info()
    {
        $client = new GuzzleHttp();
        debug('I can reach in and get stuff from the DataDog service.');
        debug($client);
    }
}