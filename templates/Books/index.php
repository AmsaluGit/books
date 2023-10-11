<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Book> $books
 */
?>


<div class="d-flex justify-content-begin mt-4 mb-2">
    <a class="btn btn-primary" href="<?= $this->Url->build('/') ?>">Back to Home</a>
</div>



<div class="d-flex justify-content-end mb-2">
    <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' =>  'float-right btn btn-success']) ?>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card card-header">
            <h3><?= __('Books') ?></h3>
        </div>
        <div class="card card-body">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?= $this->Paginator->sort('title', 'Book.title') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('author_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $key => $book) : ?>
                        <tr>
                            <td><?= $this->Number->format($key + 1) ?></td>
                            <td><?= h($book->title) ?></td>
                            <td><?= $book->hasValue('author') ? $this->Html->link($book->author->name, ['controller' => 'Authors', 'action' => 'view', $book->author->id]) : '' ?></td>
                            <td><?= h($book->genre) ?></td>
                            <td>
                                <?= $this->Html->link(__('View'), ['action' => 'view', $book->id],  ['class' => 'btn btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id],  ['class' => 'btn btn-warning']) ?>


                                <a href="#" role="button" class='btn btn-danger' onclick="delete_row(this,'<?= $book->id ?>', 'books')">Delete</a>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <nav>
        <ul class="pagination">
            <li class="page-itiem"> <?= $this->Paginator->first('<< ' . __('first')) ?> </li>
            <li class="page-itiem"> <?= $this->Paginator->prev('< ' . __('previous')) ?> </li>
            <li class="page-itiem"> <?= $this->Paginator->numbers(); ?> </li>
            <li class="page-itiem"> <?= $this->Paginator->next(__('next') . ' >') ?> </li>
            <li class="page-itiem"> <?= $this->Paginator->last(__('last') . ' >>') ?> </li>
        </ul>

    </nav>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>

</div>
</div>
