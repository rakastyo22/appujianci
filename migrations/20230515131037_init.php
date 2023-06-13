<?php

use Phoenix\Database\Element\Index;
use Phoenix\Migration\AbstractMigration;

final class Init extends AbstractMigration
{
    protected function up(): void
    {
        $this->table('user')
            ->addColumn('id', 'integer', ['autoincrement' => true])
            ->addColumn('username', 'string')
            ->addColumn('password', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addIndex('username', Index::TYPE_UNIQUE)
            ->create();
    }

    protected function down(): void
    {
        $this->table('user')
            ->drop();
    }
}
