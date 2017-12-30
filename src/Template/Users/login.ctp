<div class="login-logo">
	<b style="color: red">money </b>change
</div>

<div class="login-box-body">
	<?= $this->Form->create() ?>

	<fieldset>
		<legend class="login-box-msg"><?= __('ログイン') ?></legend>
		<div class="form-group">
			<?= $this->Form->control('username', ['class' => 'form-control', 'label' => 'username']) ?>
		</div>
		<div class="form-group">
			<?= $this->Form->control('password', ['class' => 'form-control', 'label' => 'password']) ?>
		</div>
	</fieldset>
	<?= $this->Form->button(__('ログイン'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
	<?= $this->Form->end() ?>
</div>