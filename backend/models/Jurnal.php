<?php

namespace backend\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "jurnal".
 *
 * @property int $id_jurnal
 * @property string|null $judul_jurnal
 * @property string|null $foto
 * @property string|null $deskripsi
 * @property string|null $jurnal_link
 */
class Jurnal extends \yii\db\ActiveRecord
{
    public $imageFile;
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
            [['foto'], 'string', 'max' => 2550],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
            [['judul_jurnal', 'deskripsi', 'deskripsi_eng', 'jurnal_link'], 'string', 'max' => 2555],
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
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'deskripsi_eng' => 'Deskripsi_eng',
            'jurnal_link' => 'Jurnal Link',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->foto = '/jurnal/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok && $this->imageFile) {
            $fullPath = Yii::getAlias('@frontend/web/storage' . $this->foto);
            $dir = dirname($fullPath);
            if (!FileHelper::createDirectory($dir) | !$this->imageFile->saveAs($fullPath)) {
                $transaction->rollBack();

                return false;
            }
        }

        $transaction->commit();

        return $ok;
    }


    public function getImageUrl()
    {
        return self::formatImageUrl($this->foto);
    }

    public static function formatImageUrl($imagePath)
    {
        if ($imagePath) {
            return Yii::$app->params['frontendUrl'] . '/storage' . $imagePath;
        }

        return Yii::$app->params['frontendUrl'] . '/img/no_img.jpg';
    }
    public function getShortDescription()
    {
        return \yii\helpers\StringHelper::truncateWords(strip_tags($this->deskripsi), 10);
    }

    public function afterDelete()
    {
        parent::afterDelete();
        if ($this->image) {
            $dir = Yii::getAlias('@frontend/web/storage') . dirname($this->image);
            FileHelper::removeDirectory($dir);
        }
    }
}
