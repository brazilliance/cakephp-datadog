<?php
namespace DataDog\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\ORM\Locator\TableLocator;
use Cake\ORM\TableRegistry;

/**
 * Events Controller
 *
 *
 * @method \App\Model\Entity\Page[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends Controller
{
    public function demo()
    {
        $this->viewBuilder()->setLayout(false);

        $location = new TableLocator();
        //$event = $this->Events->newEntity();
        debug(TableRegistry::getTableLocator()->get('DataDog.Events'));
    }
}