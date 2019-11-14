<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<h1><?= h($customer->id) ?></h1>
<p><?= h($customer->first_name) ?></p>
<p><? h($customer->last_name) ?></p>
<p><?= h($customer->telephone_number) ?></p>
<p><?= h($customer->mailaddress) ?></p>