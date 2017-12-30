<?php
/**
  * Users view.ctp
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title border-btm" id="page-title"><i class="fa fa-table"></i> 登録情報
    </h3>
  </div>
  <div class="box-body">
    <?= $this->Html->link('変更', ['action' => 'edit', $user->id], ['class' => 'btn btn-warning pull-right', 'style' => 'margin-bottom: 10px', 'escape' => false]) ?>
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td>メールアドレス</td>
                <td><?= $user->has('email') ? h($user->email) : '' ?></td>
            </tr>
        <tbody>
    </table>
  </div>
</div>