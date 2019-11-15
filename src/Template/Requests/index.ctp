<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $requests
 */
?>
<h1>requests</h1>
<table>
    <tr>
        <th>Id</th>
        <th>CustomerId</th>
    </tr>

    <?php foreach ($requests as $request): ?>
        <tr>
            <td><?= $this->Html->link($request->id, ['action' => 'view', $request->id]) ?></td>
            <td>
                <?= $this->Html->link($request->customer_id, ['controller' => 'customers', 'action' => 'view', $request->customer_id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>