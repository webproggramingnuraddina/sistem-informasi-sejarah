<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peneltian".
 *
 * @property int $id_penelitian
 * @property string|null $judul_penelitian
 * @property string|null $nama_ketua
 * @property string|null $kepakaran_ketua
 * @property string|null $anggota
 * @property string|null $ang_mhs
 * @property string|null $link_penelitian
 */
class Peneltian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peneltian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_penelitian', 'nama_ketua'], 'required'],
            [['judul_penelitian', 'anggota', 'ang_mhs', 'link_penelitian'], 'string', 'max' => 2555],
            [['nama_ketua', 'kepakaran_ketua'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penelitian' => 'Id Penelitian',
            'judul_penelitian' => 'Judul Penelitian',
            'nama_ketua' => 'Nama Ketua',
            'kepakaran_ketua' => 'Kepakaran Ketua',
            'anggota' => 'Anggota',
            'ang_mhs' => 'Ang Mhs',
            'link_penelitian' => 'Link Penelitian',
        ];
    }
}
