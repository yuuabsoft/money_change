<nav class="main-sidebar">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"><?= __('Main menu') ?></li>
            <li>
                <?= $this->Html->link(
                '<i class="fa fa-table"></i>' . __('コインの購入'),
                ['controller' => 'Sales', 'action' => 'add'],
                ['escape' => false]
                ) ?>
            </li>
            <li>
                <?= $this->Html->link(
                '<i class="fa fa-table"></i>' . __('コインの交換'),
                ['controller' => 'Exchanges', 'action' => 'add'],
                ['escape' => false]
                ) ?>
            </li>
            <li class="header"><?= __('Others') ?></li>
            <li>
                <?= $this->Html->link(
                '<i class="fa fa-table"></i>' . __('登録情報の確認'),
                ['controller' => 'Users', 'action' => 'view'],
                ['escape' => false]
                ) ?>
            </li>
            <li>
                <?= $this->Html->link(
                '<i class="fa fa-table"></i>' . __('口座情報の確認'),
                ['controller' => 'Accounts', 'action' => 'index'],
                ['escape' => false]
                ) ?>
            </li>
            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-sign-out"></i>' . __('ログアウト') ,
                    ['controller' => 'Users', 'action' => 'logout'],
                    ['escape' => false]
                ) ?>
            </li>
        </ul>
    </div>
</nav>
