<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kerjasama".
 *
 * @property int $id_kerjasama
 * @property string|null $nm_instansi
 * @property string|null $nomor
 * @property int|null $mulai_kerjasama
 * @property int|null $akhir_kerjasama
 * @property string|null $manfaat
 * @property string|null $manfaat_eng
 * @property string $bidang
 */
class Kerjasama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kerjasama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mulai_kerjasama', 'akhir_kerjasama'], 'integer'],
            [['bidang'], 'required'],
            [['nm_instansi'], 'string', 'max' => 255],
            [['nomor', 'manfaat'], 'string', 'max' => 2555],
            [['manfaat_eng'], 'string', 'max' => 255],
            [['bidang'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kerjasama' => 'Id Kerjasama',
            'nm_instansi' => 'Nm Instansi',
            'nomor' => 'Nomor',
            'mulai_kerjasama' => 'Mulai Kerjasama',
            'akhir_kerjasama' => 'Akhir Kerjasama',
            'manfaat' => 'Manfaat',
            'bidang' => 'Bidang',
        ];
    }
}
