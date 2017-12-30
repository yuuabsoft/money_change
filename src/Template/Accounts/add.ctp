<?php
/**
  * Accounts add.ctp
  * @var \App\View\AppView $this
  */
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-download"></i> <?= '口座情報の追加'?></h3>
    </div>
        <?= $this->Form->create($account, ['novalidate' => true]) ?>
        <div class="box-body">
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('number', ['label' => '口座番号', 'class' => 'form-control', 'placeholder' => '口座番号']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('bank', ['type' => 'text', 'label' => '銀行名', 'class' => 'form-control', 'placeholder' => '銀行名']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('branch', ['type' => 'text', 'label' => '支店名', 'class' => 'form-control', 'placeholder' => '支店名']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('recipient', ['type' => 'text', 'label' => '受取人名', 'class' => 'form-control', 'placeholder' => '受取人名']);?>
            </div>
          </div>
        </div>
        <div class="box-footer">
            <?= $this->Form->button('<i class="fa fa-download"></i><span>&ensp;</span>' . '追加', ['class' => 'btn btn-success', 'escape' => false]) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
