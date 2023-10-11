<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 * @var string[]|\Cake\Collection\CollectionInterface $authors
 */
?>

<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="<?= $this->Url->build('/books') ?>">Back to list</a>
 </div>



<div class="card mt-4 mb-2">
        <div class="card card-header">
            <h3><?=  __('Edit Book') ?></h3>
        </div>
        <div class="card card-body">
            <?= $this->Form->create($book) ?>

                <?php
                    echo $this->Form->control('title', ['class' => 'form-control']);
                    echo $this->Form->control('author_id', ['class' => 'form-control', 'options' => $authors]);
                    echo $this->Form->control('genre', ['class' => 'form-control']);
                ?>

            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
            </div>
    </div>

