<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<h1><?= h($customer->id) ?></h1>
<p><?= h($customer->first_name) ?></p>
<p><?= h($customer->last_name) ?></p>
<p><?= h($customer->telephone_number) ?></p>
<p><?= h($customer->mailaddress) ?></p>

<p><?= $this->Html->link('Add Request', ['controller' => 'requests', 'action' => 'add', '?' => ['customer_id' => $customer->id]]) ?></p>

<p>requests</p>
<table>
    <tr>
        <th>Id</th>
    </tr>

    <?php foreach ($requests as $request): ?>
        <tr>
            <td><?= $this->Html->link($request->id, ['action' => 'view', $request->id]) ?></td>
        </tr>
    <?php endforeach; ?>
</table>