<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "layananmutu".
 *
 * @property int $id
 * @property string|null $nama_layanan
 * @property string|null $nama_layanan_eng
 * @property string|null $link
 */
class Layananmutu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'layananmutu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_layanan', 'nama_layanan_eng'], 'string'],
            [['link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_layanan' => 'Nama Layanan',
            'nama_layanan_eng' => 'Nama Layanan Eng',
            'link' => 'Link',
        ];
    }
}
