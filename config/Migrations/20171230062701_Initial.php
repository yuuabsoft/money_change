<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('accounts')
            ->addColumn('number', 'integer', [
                'comment' => '口座番号',
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('bank', 'text', [
                'comment' => '銀行名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('branch', 'text', [
                'comment' => '支店名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('deposit_id', 'integer', [
                'comment' => '預金種目ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('recipient', 'text', [
                'comment' => '受取人名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザーID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'number',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('deposits')
            ->addColumn('name', 'text', [
                'comment' => '種目名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('exchanges')
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザーID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('account_id', 'integer', [
                'comment' => '口座ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('amount', 'integer', [
                'comment' => '換金額',
                'default' => '0',
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('status_id', 'integer', [
                'comment' => '換金状態ID',
                'default' => '1',
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('roles')
            ->addColumn('name', 'text', [
                'comment' => '権限名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('sales')
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザーID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('amount', 'integer', [
                'comment' => '販売額',
                'default' => '0',
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('statuses')
            ->addColumn('name', 'text', [
                'comment' => '状態名',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('users')
            ->addColumn('coin', 'integer', [
                'comment' => '通貨',
                'default' => '0',
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('email', 'text', [
                'comment' => 'メールアドレス',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'comment' => 'username',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'text', [
                'comment' => 'password',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('role_id', 'integer', [
                'comment' => '権限ID',
                'default' => '1',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '登録日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => '削除日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'username',
                ],
                ['unique' => true]
            )
            ->create();
    }

    public function down()
    {
        $this->dropTable('accounts');
        $this->dropTable('deposits');
        $this->dropTable('exchanges');
        $this->dropTable('roles');
        $this->dropTable('sales');
        $this->dropTable('statuses');
        $this->dropTable('users');
    }
}
