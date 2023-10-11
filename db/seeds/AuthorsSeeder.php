<?php

declare(strict_types=1);

// use Migrations\AbstractSeed;

use Cake\Database\Connection;
use Phinx\Seed\AbstractSeed;
use Cake\Datasource\ConnectionManager;


class AuthorsSeeder extends AbstractSeed
{
     /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {


        $data = [
            [
                "id" => 1,
                "name" => "George RR Martin",
            ],
            [
                "id" => 2,
                "name" => "Amsalu Tadesse",
            ],
            [
                "id" => 3,
                "name" => "John Walter",
            ],


        ];
        $this->table('authors')->insert($data)->save();
    }
}
