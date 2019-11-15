<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Samplecake[]|\Cake\Collection\CollectionInterface $samplecake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Samplecake'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="samplecake index large-9 medium-8 columns content">
    <h3><?= __('Samplecake') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($samplecake as $samplecake): ?>
            <tr>
                <td><?= $this->Number->format($samplecake->id) ?></td>
                <td><?= h($samplecake->name) ?></td>
                <td><?= $this->Number->format($samplecake->age) ?></td>
                <td><?= h($samplecake->address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $samplecake->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $samplecake->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $samplecake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samplecake->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
