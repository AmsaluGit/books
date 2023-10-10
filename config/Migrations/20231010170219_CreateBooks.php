<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBooks extends AbstractMigration
{
    /**
     * change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('books')
            ->addColumn('title', 'string', ['limit' => 255])
            ->addColumn('author_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('genre', 'string', ['limit' => 100])
            ->addForeignKey('author_id', 'authors', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
        // $table->create();
    }
}
