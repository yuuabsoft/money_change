<?php
use Migrations\AbstractSeed;

/**
 * Statuses seed.
 */
class StatusesSeed extends AbstractSeed
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
                'name' => '申請中',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
            [
                'id' => '2',
                'name' => '完了',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
            [
                'id' => '3',
                'name' => '失敗',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
        ];

        $table = $this->table('statuses');
        $table->insert($data)->save();
    }
}
