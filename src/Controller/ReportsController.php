<?php
// src/Controller/ReportsController.php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;

class ReportsController extends Controller
{
    public function summary()
    {
        $connection = ConnectionManager::get('default');

        $authorQuery = "
        SELECT
        a.name,
        b.genre,
        COUNT(a.id) AS book_count,
        (SELECT COUNT(*) FROM books WHERE author_id = a.id) AS total_books
    FROM
        books as b
        inner join
        authors as a
        on b.author_id = a.id
    GROUP BY
        a.id,
        b.genre;
    ";
    $authorStats = $connection->execute($authorQuery)->fetchAll('assoc');


/*

        // Query to get the count of books by author
        $authorQuery = "
            SELECT author_id, COUNT(*) AS book_count
            FROM books
            GROUP BY author_id
        ";
        $authorStats = $connection->execute($authorQuery)->fetchAll('assoc');

        // Query to get the count of books by genre
        $genreQuery = "
            SELECT genre, COUNT(*) AS book_count
            FROM books
            GROUP BY genre
        ";
        $genreStats = $connection->execute($genreQuery)->fetchAll('assoc');

        // Query to get the total number of books
        $totalQuery = "
            SELECT COUNT(*) AS total_count
            FROM books
        ";
        $totalResult = $connection->execute($totalQuery)->fetch('assoc');
        $totalCount = $totalResult['total_count'];*/

        $this->set(compact('authorStats'));
    }
}
