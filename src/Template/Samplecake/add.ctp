<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Samplecake $samplecake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Samplecake'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="samplecake form large-9 medium-8 columns content">
    <?= $this->Form->create($samplecake) ?>
    <fieldset>
        <legend><?= __('Add Samplecake') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('age');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
