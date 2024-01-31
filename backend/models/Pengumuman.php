<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property int $id_pengumuman
 * @property string|null $judul_pengumaman
 * @property string|null $isi
 * @property string|null $image
 */
class Pengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_pengumaman', 'isi', 'image'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengumuman' => 'Id Pengumuman',
            'judul_pengumaman' => 'Judul Pengumaman',
            'isi' => 'Isi',
            'image' => 'Image',
        ];
    }
}
