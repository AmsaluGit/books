<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>

<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="<?= $this->Url->build('/authors') ?>">Back to list</a>
 </div>

<div class="card mt-4 mb-2">
        <div class="card card-header">
            <h3><?=  __('Edit Author') ?></h3>
        </div>
        <div class="card card-body">

            <?= $this->Form->create($author) ?>

                <?php
                    echo $this->Form->control('name', ['class' => 'form-control']);
                ?>

            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

