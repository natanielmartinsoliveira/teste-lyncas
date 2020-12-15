<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorite $favorite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Favorite'), ['action' => 'edit', $favorite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Favorite'), ['action' => 'delete', $favorite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Favorites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favorite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="favorites view large-9 medium-8 columns content">
    <h3><?= h($favorite->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Idbook') ?></th>
            <td><?= h($favorite->idbook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($favorite->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($favorite->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('ImageLinks') ?></h4>
        <?= $this->Text->autoParagraph(h($favorite->imageLinks)); ?>
    </div>
</div>
