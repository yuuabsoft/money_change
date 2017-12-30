<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success" style="margin-bottom: 1px; font-weight: bold; font-size: 14px;" onclick="this.classList.add('hidden')"><i class="fa fa-info-circle" aria-hidden="true"></i> <?= $message ?></div>