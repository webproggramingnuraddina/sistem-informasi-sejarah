<?php

namespace backend\models;

use yii\helpers\FileHelper;
use Yii;

/**
 * This is the model class for table "fasilitas".
 *
 * @property int $id_fasilitas
 * @property string|null $title
 * @property string|null $deskripsi
 * @property string|null $image
 */
class Fasilitas extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'deskripsi'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['deskripsi', 'image'], 'string', 'max' => 2555],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->image = '/fasilitas/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok && $this->imageFile) {
            $fullPath = Yii::getAlias('@frontend/web/storage' . $this->image);
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


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fasilitas' => 'Id Fasilitas',
            'title' => 'Title',
            'deskripsi' => 'Deskripsi',
            'image' => 'Image',
        ];
    }
}
