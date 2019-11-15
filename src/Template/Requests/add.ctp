<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<h1>Add Request</h1>
<?php
    echo $this->Form->create($request);
    echo $this->Form->button(__('Save Reuqest'));
    echo $this->Form->end();
?>