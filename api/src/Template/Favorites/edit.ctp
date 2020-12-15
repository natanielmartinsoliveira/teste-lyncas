<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorite $favorite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $favorite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $favorite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Favorites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="favorites form large-9 medium-8 columns content">
    <?= $this->Form->create($favorite) ?>
    <fieldset>
        <legend><?= __('Edit Favorite') ?></legend>
        <?php
            echo $this->Form->control('idbook');
            echo $this->Form->control('name');
            echo $this->Form->control('imageLinks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
