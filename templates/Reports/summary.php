<!-- src/Template/Reports/book_stats.ctp -->
<!DOCTYPE html>
<html>
<head>
    <title>Book Stats Report</title>

</head>
<body>
<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="/">Back to Home</a>
            </div>
    <div class="card mt-3">
        <div class="card card-header">
            <h3><?= __('Books by author and genre') ?></h3>
        </div>
        <div class="card card-body">


    <table class="table table-striped table-hover">
        <tr>
            <th>Author</th>
            <th>Genre</th>
            <th>Number of Books</th>
            <th>% from Total</th>
        </tr>
        <?php foreach ($authorStats as $stat): ?>
        <tr>
             <td><?= $stat['name'] ?></td>
            <td><?= $stat['genre'] ?></td>
            <td><?= $stat['book_count'] ?></td>
            <td><?= number_format(($stat['book_count'] / $stat['total_books']) * 100, 0) ?>%</td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
        </div>

</body>
</html>
