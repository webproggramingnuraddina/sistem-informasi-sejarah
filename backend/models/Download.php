<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "download".
 *
 * @property int $id_download
 * @property string|null $judul
 * @property string|null $link_download
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'download';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul'], 'string', 'max' => 255],
            [['link_download'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_download' => 'Id Download',
            'judul' => 'Judul',
            'link_download' => 'Link Download',
        ];
    }
}
