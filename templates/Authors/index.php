<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Author> $authors
 */
?>
<div class="container">
    <?= $this->Html->link(__('New Author'), ['action' => 'add'], ['class' => 'float-right btn btn-success']) ?>
    <h3><?= __('Authors') ?></h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions1"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= h($author->name) ?></td>
                    <td class="actions13">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $author->id],  ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $author->id],  ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $author->id], ['class' => 'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
</div>
