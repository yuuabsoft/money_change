<!DOCTYPE html>
<html lang="jp">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="Content-Language" content="ja">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none">
    <title>
        money_change
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <?= $this->Html->css('AdminLTE.min.css') ?>

    <?= $this->Html->script('../plugins/jQuery/jquery-2.2.3.min.js'); ?>

    <?= $this->Html->script('app.min.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!-- fixed入れるとヘッダー部分が空くので必要なければ消す -->
<!-- skinはlightつけてもいいかも -->
<body class="hold-transition login-page">

<div class="login-box">
<?= $this->Flash->render(); ?>
<?= $this->fetch('content') ?>
</div>

</body>
</html>