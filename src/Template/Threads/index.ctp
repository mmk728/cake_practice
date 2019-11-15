<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thread[]|\Cake\Collection\CollectionInterface $threads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Thread'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contents'), ['controller' => 'Contents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Contents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="threads index large-9 medium-8 columns content">
    <h3><?= __('Threads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($threads as $thread): ?>
            <tr>
                <td><?= $this->Number->format($thread->id) ?></td>
                <td><?= h($thread->title) ?></td>
                <td><?= h($thread->categories) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $thread->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thread->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thread->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id)]) ?>
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
