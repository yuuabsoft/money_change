<?php
/**
  * Exchanges add.ctp
  * @var \App\View\AppView $this
  */
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-download"></i> <?= 'コインを交換する'?></h3>
    </div>
        <?= $this->Form->create($exchange, ['novalidate' => true]) ?>
        <div class="box-body">
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('amount', ['type' => 'text', 'label' => 'コイン', 'class' => 'form-control', 'placeholder' => 'コイン']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('account_id', ['label' => '口座', 'options' => $accounts, 'class' => 'form-control', 'emtpy'=>true]);?>
            </div>
          </div>
        </div>
        <div class="box-footer">
            <?= $this->Form->button('<i class="fa fa-download"></i><span>&ensp;</span>' . '追加', ['class' => 'btn btn-success', 'escape' => false]) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
