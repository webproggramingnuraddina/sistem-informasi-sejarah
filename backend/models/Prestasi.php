<?php

namespace backend\models;
use yii\helpers\FileHelper;

use Yii;

/**
 * This is the model class for table "prestasi".
 *
 * @property int $id_prestasi
 * @property string|null $nama_mhs
 * @property string|null $nama_prestasi
 * @property string|null $image
 * @property int|null $tahun
 * @property string|null $jenis_prestasi
 */
class Prestasi extends \yii\db\ActiveRecord
{
    public $imageFile;
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
            [['nama_mhs', 'jenis_prestasi', 'image'], 'string', 'max' => 255],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
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
            'image' => 'Image',
            'tahun' => 'Tahun',
            'jenis_prestasi' => 'Jenis Prestasi',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->image = '/prestasi/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok && $this->imageFile) {
            $fullPath = Yii::getAlias('@backend/web/storage' . $this->image);
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
        return self::formatImageUrl($this->image);
    }

    public static function formatImageUrl($imagePath)
    {
        if ($imagePath) {
            return Yii::$app->params['backendUrl'] . '/storage' . $imagePath;
        }

        return Yii::$app->params['backendUrl'] . '/img/no_img.jpg';
    }
    public function getShortDescription()
    {
        return \yii\helpers\StringHelper::truncateWords(strip_tags($this->deskripsi), 10);
    }

    public function afterDelete()
    {
        parent::afterDelete();
        if ($this->image) {
            $dir = Yii::getAlias('@backend/web/storage') . dirname($this->image);
            FileHelper::removeDirectory($dir);
        }
    }
}
