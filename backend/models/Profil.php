<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id_profil
 * @property string|null $sejarah
 * @property string|null $sejarah_eng
 * @property string|null $visi
 * @property string|null $visi_eng
 * @property string|null $misi
 * @property string|null $misi_eng
 * @property string|null $tujuan
 * @property string|null $tujuan_eng
 * @property string|null $prodi
 * @property string|null $prodi_eng
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sejarah', 'sejarah_eng', 'visi', 'visi_eng', 'misi', 'misi_eng', 'tujuan', 'tujuan_eng', 'prodi', 'prodi_eng'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_profil' => 'Id Profil',
            'sejarah' => 'Sejarah',
            'sejarah_eng' => 'Sejarah Eng',
            'visi' => 'Visi',
            'visi_eng' => 'Visi Eng',
            'misi' => 'Misi',
            'misi_eng' => 'Misi Eng',
            'tujuan' => 'Tujuan',
            'tujuan_eng' => 'Tujuan Eng',
            'prodi' => 'Prodi',
            'prodi_eng' => 'Prodi Eng',
        ];
    }
}
