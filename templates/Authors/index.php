<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Author> $authors
 */
?>

<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="<?= $this->Url->build('/') ?>">Back to Home</a>
            </div>

<div class="d-flex justify-content-end mb-2">
<?= $this->Html->link(__('New Author'), ['action' => 'add'], ['class' =>  'float-right btn btn-success']) ?>
</div>


<div class="col-md-12">
<div class="card">
        <div class="card card-header">
            <h3><?= __('Authors') ?></h3>
        </div>
        <div class="card card-body">


        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions1"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $key => $author) : ?>
                <tr>
                    <th scope="row"><?= $this->Number->format($key + 1) ?></th>
                    <td><?= h($author->name) ?></td>
                    <td>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $author->id],  ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $author->id],  ['class' => 'btn btn-warning']) ?>
                        <a href="#" role="button" class='btn btn-danger' onclick="delete_row(this,'<?= $author->id ?>','authors')">Delete</a>
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
</div>
</div>
