<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>

<div class="d-flex justify-content-begin mt-4 mb-2">
                <a href="<?= $this->Url->build('/authors') ?>">Back to list</a>
 </div>

<div class="card mt-3">
        <div class="card card-header">
            <h3><?= h($author->name) ?></h3>
        </div>
        <div class="card card-body">


        <table class="table table-striped">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($author->name) ?></td>
                </tr>

            </table>

            </div>
        </div>
