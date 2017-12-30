<?php
use Migrations\AbstractSeed;

/**
 * Deposits seed.
 */
class DepositsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => '普通',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
            [
                'id' => '2',
                'name' => '当座',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
            [
                'id' => '3',
                'name' => '貯蓄',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
        ];

        $table = $this->table('deposits');
        $table->insert($data)->save();
    }
}
