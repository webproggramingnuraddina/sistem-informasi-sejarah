<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pkm".
 *
 * @property int $id_pkm
 * @property string|null $judul_pkm
 * @property string|null $nama_ketua
 * @property string|null $kepakaran
 * @property string|null $anggota
 * @property string|null $ang_mhs
 * @property int|null $tahun
 */
class Pkm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pkm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'integer'],
            [['judul_pkm', 'anggota', 'ang_mhs'], 'string', 'max' => 2555],
            [['nama_ketua', 'kepakaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pkm' => 'Id Pkm',
            'judul_pkm' => 'Judul Pkm',
            'nama_ketua' => 'Nama Ketua',
            'kepakaran' => 'Kepakaran',
            'anggota' => 'Anggota',
            'ang_mhs' => 'Ang Mhs',
            'tahun' => 'Tahun',
        ];
    }
}
