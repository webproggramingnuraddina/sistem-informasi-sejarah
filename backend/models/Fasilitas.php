<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fasilitas".
 *
 * @property int $id_fasilitas
 * @property string|null $title
 * @property string|null $deskripsi
 * @property string|null $image
 */
class Fasilitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['deskripsi', 'image'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fasilitas' => 'Id Fasilitas',
            'title' => 'Title',
            'deskripsi' => 'Deskripsi',
            'image' => 'Image',
        ];
    }
}
