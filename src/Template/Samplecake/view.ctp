<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Samplecake $samplecake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Samplecake'), ['action' => 'edit', $samplecake->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Samplecake'), ['action' => 'delete', $samplecake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samplecake->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Samplecake'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Samplecake'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="samplecake view large-9 medium-8 columns content">
    <h3><?= h($samplecake->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($samplecake->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($samplecake->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($samplecake->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($samplecake->age) ?></td>
        </tr>
    </table>
</div>
