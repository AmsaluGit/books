<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="show-container">
    <h1 class="show-title"><?= h($book->title) ?></h1>
    <div class="show-content">
      <div class="show-label">Author:</div>
      <div class="show-value"><?= h($book->author->name) ?></div>

      <div class="show-label">Genre:</div>
      <div class="show-value"><?= h($book->genre) ?></div>

      <!-- Add more fields as needed -->
    </div>
    <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="show-back-link">Back</a>
  </div>
