<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property string|null $nama
 * @property int|null $nip
 * @property int|null $kriteria
 * @property string|null $tmp_tgl_lahir
 * @property string|null $email
 * @property string|null $riwayat_pen
 * @property string|null $kepakaran
 * @property string|null $mata_kuliah
 * @property string|null $image
 * @property string|null $detail
 * @property string|null $publikasi
 *
 * @property Kriteria $kriteria0
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'kriteria'], 'integer'],
            [['nama', 'email', 'riwayat_pen', 'kepakaran', 'detail', 'publikasi'], 'string', 'max' => 255],
            [['tmp_tgl_lahir'], 'string', 'max' => 200],
            [['mata_kuliah', 'image'], 'string', 'max' => 2555],
            [['kriteria'], 'exist', 'skipOnError' => true, 'targetClass' => Kriteria::class, 'targetAttribute' => ['kriteria' => 'id_kriteria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'kriteria' => 'Kriteria',
            'tmp_tgl_lahir' => 'Tmp Tgl Lahir',
            'email' => 'Email',
            'riwayat_pen' => 'Riwayat Pen',
            'kepakaran' => 'Kepakaran',
            'mata_kuliah' => 'Mata Kuliah',
            'image' => 'Image',
            'detail' => 'Detail',
            'publikasi' => 'Publikasi',
        ];
    }

    /**
     * Gets query for [[Kriteria0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKriteria0()
    {
        return $this->hasOne(Kriteria::class, ['id_kriteria' => 'kriteria']);
    }
}
