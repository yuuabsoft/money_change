<?php
/**
  * Users add.ctp
  * @var \App\View\AppView $this
  */
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-download"></i> <?= '新規登録'?></h3>
    </div>
        <?= $this->Form->create($user, ['novalidate' => true]) ?>
        <div class="box-body">
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('username', ['type' => 'text', 'label' => 'ログインID', 'class' => 'form-control', 'placeholder' => 'ログインID']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('password', ['type' => 'text', 'label' => 'パスワード', 'class' => 'form-control', 'placeholder' => 'パスワード']);?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
               <?= $this->Form->control('email', ['type' => 'text', 'label' => 'メールアドレス', 'class' => 'form-control', 'placeholder' => 'メールアドレス']);?>
            </div>
          </div>
        </div>
        <div class="box-footer">
            <?= $this->Form->button('<i class="fa fa-download"></i><span>&ensp;</span>' . '追加', ['class' => 'btn btn-success', 'escape' => false]) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
