<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tindaklanjutmutu".
 *
 * @property int $id
 * @property string|null $strategi
 * @property string|null $strategi_eng
 * @property string|null $upaya
 * @property string|null $upaya_eng
 * @property string|null $pelaksanaan_waktu
 */
class Tindaklanjutmutu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindaklanjutmutu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['strategi', 'strategi_eng', 'upaya', 'upaya_eng', 'pelaksanaan_waktu'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'strategi' => 'Strategi',
            'strategi_eng' => 'Strategi Eng',
            'upaya' => 'Upaya',
            'upaya_eng' => 'Upaya Eng',
            'pelaksanaan_waktu' => 'Pelaksanaan Waktu',
        ];
    }
}
