<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>

<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="<?= $this->Url->build('/books') ?>">Back to list</a>
 </div>


<div class="card mt-3">
        <div class="card card-header">
            <h3><?= h($book->title) ?></h3>
        </div>
        <div class="card card-body">

            <table class="table table-striped">
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($book->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= $book->hasValue('author') ? $this->Html->link($book->author->name, ['controller' => 'Authors', 'action' => 'view', $book->author->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($book->genre) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>
