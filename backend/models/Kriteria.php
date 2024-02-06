<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kriteria".
 *
 * @property int $id_kriteria
 * @property string $kriteria
 *
 * @property Dosen[] $dosens
 */
class Kriteria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kriteria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kriteria'], 'required'],
            [['kriteria'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kriteria' => 'Id Kriteria',
            'kriteria' => 'Kriteria',
        ];
    }

    /**
     * Gets query for [[Dosens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosens()
    {
        return $this->hasMany(Dosen::class, ['kriteria' => 'id_kriteria']);
    }
}
