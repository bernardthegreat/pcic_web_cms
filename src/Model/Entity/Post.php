<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $remarks
 * @property string|null $content
 * @property int|null $display_sequence
 * @property int $category_id
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created_datetime
 * @property \Cake\I18n\FrozenTime $modified_datetime
 * @property bool|null $homepage
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Image[] $images
 */
class Post extends Entity
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
        'remarks' => true,
        'content' => true,
        'display_sequence' => true,
        'category_id' => true,
        'enabled' => true,
        'created_datetime' => true,
        'modified_datetime' => true,
        'homepage' => true,
        'category' => true,
        'images' => true
    ];
}
