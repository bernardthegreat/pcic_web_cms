<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $class_name
 * @property int|null $display_sequence
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created_datetime
 * @property \Cake\I18n\FrozenTime $modified_datetime
 * @property string|null $remarks
 *
 * @property \App\Model\Entity\Post[] $posts
 * @property \App\Model\Entity\Subcategory[] $subcategories
 */
class Category extends Entity
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
        'name' => true,
        'class_name' => true,
        'display_sequence' => true,
        'enabled' => true,
        'created_datetime' => true,
        'modified_datetime' => true,
        'remarks' => true,
        'posts' => true,
        'subcategories' => true
    ];
}
