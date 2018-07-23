<?php
namespace CakePHP_DataDog\Services;

class DataDogService
{
    public function info()
    {
        debug('I can reach in and get stuff from the DataDog service.');
        debug($client);
    }
}