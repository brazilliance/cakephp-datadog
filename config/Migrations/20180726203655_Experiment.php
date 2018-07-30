<?php
use Migrations\AbstractMigration;

class Experiment extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('experiment');

        $table
            ->addColumn('name_first', 'string')
            ->addColumn('name_last', 'string')
            ->create();
    }
}
