<?php
namespace CakePHP_DataDog;

use Cake\Core\BasePlugin;
use App\Services\DataDogService;

/**
 * Plugin class for CakePHP 3.6.0 plugin collection.
 */
class Plugin extends BasePlugin
{
    public function info()
    {
        debug('Let\'s make sure this is working!');
        $plugin = new DataDogService();
        $plugin->info();
        
    }
}