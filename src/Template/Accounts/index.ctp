<?php
/**
  * Accounts index.ctp
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title border-btm" id="page-title"><i class="fa fa-table"></i> 口座一覧
    </h3>
  </div>
  <div class="box-body">
    <?= $this->Html->link('口座の追加', ['action' => 'add'], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
    <?php foreach ($accounts as $account): ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title col-sm-8" id="page-title"> 口座
            </h3>
            <div class="col-sm-4">
                <?= $this->Html->link('変更・削除', ['action' => 'edit', $account->id], ['class' => 'btn btn-warning pull-right', 'escape' => false]) ?>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>口座番号</td>
                        <td><?= $account->has('number') ? h($account->number) : '' ?></td>
                    </tr>
                    <tr>
                        <td>銀行名</td>
                        <td><?= $account->has('bank') ? h($account->bank) : '' ?></td>
                    </tr>
                    <tr>
                        <td>支店名</td>
                        <td><?= $account->has('branch') ? h($account->branch) : '' ?></td>
                    </tr>
                    <tr>
                        <td>受取人名</td>
                        <td><?= $account->has('recipient') ? h($account->recipient) : '' ?></td>
                    </tr>
                <tbody>
            </table>
        </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>