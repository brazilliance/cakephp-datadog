<?php
namespace DataDog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use CakePHP_DataDog\Model\Entity\Event;

/**
 * Events Model
 */
class EventsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->getTable('events');
        $this->getDisplayField('title');
        $this->getPrimaryKey('id');

        $this->addBehavior( 'Timestamp' , [
            'events' => [
                'Model.beforeSave' => [
                    'created' => 'new',
                    'updated' => 'always'
                ]
            ]
        ]);
    }

    public static function defaultConnectionName()
    {
        return 'datadog';
    }
}