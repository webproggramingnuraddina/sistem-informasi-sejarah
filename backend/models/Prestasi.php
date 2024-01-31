<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prestasi".
 *
 * @property int $id_prestasi
 * @property string|null $nama_mhs
 * @property string|null $nama_prestasi
 * @property int|null $tahun
 * @property string|null $jenis_prestasi
 */
class Prestasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prestasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'integer'],
            [['nama_mhs', 'jenis_prestasi'], 'string', 'max' => 255],
            [['nama_prestasi'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prestasi' => 'Id Prestasi',
            'nama_mhs' => 'Nama Mhs',
            'nama_prestasi' => 'Nama Prestasi',
            'tahun' => 'Tahun',
            'jenis_prestasi' => 'Jenis Prestasi',
        ];
    }
}
