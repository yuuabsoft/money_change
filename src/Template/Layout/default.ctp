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

    <?= $this->Html->css('cake_customized.css') ?>
    <?= $this->Html->css('AdminLTE.min.css') ?>
    <?= $this->Html->css('skins/skin-yellow.min.css') ?>

    <!--<?= $this->Html->script('../plugins/jQuery/jquery-2.2.3.min.js'); ?>-->
    <?= $this->Html->script('../plugins/jQuery/jquery-3.2.1.min.js'); ?>

    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->Html->css('../plugins/datepicker/datepicker3.css') ?>
    <?= $this->Html->css('myStyle.css') ?>

    <?= $this->Html->script('app.min.js'); ?>

    <?= $this->Html->script('../plugins/slimScroll/jquery.slimscroll.min.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="skin-yellow fixed">

<div class="content-wrapper">
<?= $this->Flash->render(); ?>
<?= $this->element('header') ?>
<?= $this->element('sidebar') ?>

<?= $this->fetch('content') ?>
</div>

</body>
</html>
