<?php
use Migrations\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
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
                'name' => 'user',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
            [
                'id' => '2',
                'name' => 'admin',
                'created' => NULL,
                'modified' => NULL,
                'deleted' => NULL,
            ],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
