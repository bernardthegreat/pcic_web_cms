<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $message
 * @property \Cake\I18n\FrozenTime $created_datetime
 * @property \Cake\I18n\FrozenTime $modified_datetime
 * @property string|null $remarks
 */
class Message extends Entity
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
        'email' => true,
        'subject' => true,
        'message' => true,
        'created_datetime' => true,
        'modified_datetime' => true,
        'remarks' => true
    ];
}
