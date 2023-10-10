<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAuthors extends AbstractMigration
{
    public function change()
{
    $table = $this->table('authors');
    $table->addColumn('name', 'string', ['limit' => 255])
          ->create();
}
}
