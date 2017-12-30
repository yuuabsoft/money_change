<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property int $number
 * @property string $bank
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Exchange[] $exchanges
 */
class Account extends Entity
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
        'number' => true,
        'bank' => true,
        'branch' => true,
        'recipient' => true,
        'deposit_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'exchanges' => true
    ];
}
