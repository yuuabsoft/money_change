<?php
/**
  * Users index.ctp
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h4 class="box-title border-btm" id="page-title"><i class="fa fa-table"></i> マイページ
    </h4>
  </div>
  <div class="box-body">
    <?= $this->Html->link('コインを購入する', ['controller' => 'Sales', 'action' => 'add'], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
    <?= $this->Html->link('コインを交換する', ['controller' => 'Exchanges', 'action' => 'add'], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
    <?= $this->Html->link('登録情報確認', ['action' => 'view'], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
    <?= $this->Html->link('口座情報確認', ['controller' => 'Accounts', 'action' => 'index'], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
  </div>
</div>