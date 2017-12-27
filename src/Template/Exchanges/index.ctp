<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exchange[]|\Cake\Collection\CollectionInterface $exchanges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exchange'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exchanges index large-9 medium-8 columns content">
    <h3><?= __('Exchanges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exchanges as $exchange): ?>
            <tr>
                <td><?= $this->Number->format($exchange->id) ?></td>
                <td><?= $exchange->has('user') ? $this->Html->link($exchange->user->id, ['controller' => 'Users', 'action' => 'view', $exchange->user->id]) : '' ?></td>
                <td><?= $exchange->has('account') ? $this->Html->link($exchange->account->id, ['controller' => 'Accounts', 'action' => 'view', $exchange->account->id]) : '' ?></td>
                <td><?= $this->Number->format($exchange->amount) ?></td>
                <td><?= $exchange->has('status') ? $this->Html->link($exchange->status->name, ['controller' => 'Statuses', 'action' => 'view', $exchange->status->id]) : '' ?></td>
                <td><?= h($exchange->created) ?></td>
                <td><?= h($exchange->modified) ?></td>
                <td><?= h($exchange->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $exchange->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exchange->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exchange->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exchange->id)]) ?>
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
