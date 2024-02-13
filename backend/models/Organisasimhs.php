<?php

namespace backend\models;
use yii\helpers\FileHelper;

use Yii;

/**
 * This is the model class for table "organisasimhs".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $title_eng
 * @property string|null $image
 * @property string|null $deskripsi
 * @property string|null $deskripsi_eng
 */
class Organisasimhs extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organisasimhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_eng', 'image'], 'string', 'max' => 255],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
            [['deskripsi', 'deskripsi_eng'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'title' => 'Title Eng',
            'image' => 'Image',
            'deskripsi' => 'Deskripsi',
            'deskripsi' => 'Deskripsi Eng',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->image = '/organisasimhs/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
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
