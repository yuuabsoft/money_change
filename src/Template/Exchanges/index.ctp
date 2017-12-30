<?php
/**
  * Exchanges index.ctp
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Applicant[]|\Cake\Collection\CollectionInterface $applicants
  */
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-table"></i> コイン交換履歴</h3>
  </div>
  <!-- /.box-header -->

  <div style="margin-top: 10px; padding-left: 10px">
    <div class="row">
      <div class="col-sm-offset-10 col-sm-2">
        <?= $this->Html->link('<i class="fa fa-download"></i><span>&ensp;</span>' . '追加', ['action' => 'add'], ['class' => 'pull-right btn btn-primary my-right-btn', 'escape' => false]) ?>
      </div>
    </div>
  </div>

  <div class="box-body">
    <!-- adminならば編集・削除可能 -->
    <!-- role_id: 1 user 2 admin  -->

    <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
      <thead>
          <tr>
              <th scope="col">口座番号</th>
              <th scope="col">交換コイン数</th>
              <th scope="col">状態</th>

          </tr>
      </thead>
      <tbody>
            <?php foreach ($exchanges as $exchange): ?>
            <tr>
                <td><?= $exchange->has('account') ? h($exchange->account->number) : '' ?></td>
                <td><?= $exchange->has('amount') ? h($exchange->amount) : '' ?></td>
                <td><?= $exchange->has('status') ? h($exchange->status->name) : '' ?></td>
            </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
    <div class="paginator">
      <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('最初')) ?>
        <?= $this->Paginator->prev('< ' . __('前')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('次') . ' >') ?>
        <?= $this->Paginator->last(__('最後') . ' >>') ?>
      </ul>
    </div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
