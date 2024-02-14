<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelompokriset".
 *
 * @property int $id_kelompokriset
 * @property string|null $nama_riset
 * @property string|null $nama_riset_eng
 * @property string|null $anggota
 * @property string|null $deskripsi
 * @property string|null $deskripsi_eng
 */
class Kelompokriset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelompokriset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi', 'deskripsi_eng'], 'string'],
            [['nama_riset', 'nama_riset_eng', 'anggota'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelompokriset' => 'Id Kelompokriset',
            'nama_riset' => 'Nama Riset',
            'nama_riset_eng' => 'Nama Riset Eng',
            'anggota' => 'Anggota',
            'deskripsi' => 'Deskripsi',
            'deskripsi_eng' => 'Deskripsi Eng',
        ];
    }
}
