<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $coin
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $role_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Exchange[] $exchanges
 * @property \App\Model\Entity\Sale[] $sales
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'coin' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'role_id' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'role' => true,
        'accounts' => true,
        'exchanges' => true,
        'sales' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
