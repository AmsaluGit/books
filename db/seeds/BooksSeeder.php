<?php

declare(strict_types=1);

// use Migrations\AbstractSeed;
use Phinx\Seed\AbstractSeed;

class BooksSeeder extends AbstractSeed
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
                "title" => "Book 1",
                "author_id" => 1,
                "genre" => "Fantasy",
            ],
            [
                "title" => "Book 2",
                "author_id" => 1,
                "genre" => "Fantasy",
            ],
            [
                "title" => "Book 3",
                "author_id" => 1,
                "genre" => "Fantasy",
            ],
            [
                "title" => "Book 4",
                "author_id" => 1,
                "genre" => "Fantasy",
            ],
            [
                "title" => "Book 5",
                "author_id" => 1,
                "genre" => "Fantasy",
            ],
            [
                "title" => "Book 6",
                "author_id" => 1,
                "genre" => "Horror",
            ],
            [
                "title" => "Book 7",
                "author_id" => 1,
                "genre" => "Horror",
            ],

        ];
        $this->table('books')->insert($data)->save();
    }
}
