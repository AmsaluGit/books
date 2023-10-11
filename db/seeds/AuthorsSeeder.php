<?php

declare(strict_types=1);

// use Migrations\AbstractSeed;
use Phinx\Seed\AbstractSeed;

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
                "name" => "George RR Martin",
            ],
            [
                "name" => "Amsalu Tadesse",
            ],
            [
                "name" => "John Walter",
            ],


        ];
        $this->table('authors')->insert($data)->save();
    }
}
