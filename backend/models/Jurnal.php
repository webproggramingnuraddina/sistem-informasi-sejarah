<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jurnal".
 *
 * @property int $id_jurnal
 * @property string|null $judul_jurnal
 * @property int|null $tahun
 * @property string|null $deskripsi
 * @property string|null $jurnal_link
 */
class Jurnal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurnal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'integer'],
            [['judul_jurnal', 'deskripsi', 'jurnal_link'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jurnal' => 'Id Jurnal',
            'judul_jurnal' => 'Judul Jurnal',
            'tahun' => 'Tahun',
            'deskripsi' => 'Deskripsi',
            'jurnal_link' => 'Jurnal Link',
        ];
    }
}
