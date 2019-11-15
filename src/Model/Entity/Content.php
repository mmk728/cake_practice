<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity
 *
 * @property int $id
 * @property int $thread_id
 * @property \Cake\I18n\FrozenDate $created_at
 * @property int $account_id
 * @property string $subject
 * @property string $text_body
 *
 * @property \App\Model\Entity\Thread $thread
 * @property \App\Model\Entity\Account $account
 */
class Content extends Entity
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
        'thread_id' => true,
        'created_at' => true,
        'account_id' => true,
        'subject' => true,
        'text_body' => true,
        'thread' => true,
        'account' => true
    ];
}
