<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exchange Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $account_id
 * @property int $amount
 * @property int $status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Account $account
 * @property \App\Model\Entity\Status $status
 */
class Exchange extends Entity
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
        'user_id' => true,
        'account_id' => true,
        'amount' => true,
        'status_id' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'account' => true,
        'status' => true
    ];
}
