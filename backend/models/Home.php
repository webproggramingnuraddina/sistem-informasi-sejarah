<?php

namespace backend\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "home".
 *
 * @property int $id
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $link_video
 */
class Home extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $imageFile2;
    public $imageFile3;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image1', 'image2', 'image3', 'link_video'], 'string', 'max' => 255],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
            ['imageFile2', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
            ['imageFile3', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'image3' => 'Image3',
            'link_video' => 'Link Video',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->image1 = '/image1/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
            $this->image2 = '/image2/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile2->name;
            $this->image3 = '/image3/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile3->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok) {
            // Simpan gambar ke direktori yang sesuai
            $baseDir = Yii::getAlias('@frontend/web/storage');

            // Simpan gambar pertama
            if ($this->imageFile) {
                $dir1 = $baseDir . $this->image1;
                $fullPath1 = $baseDir . $this->image1;

                if (!FileHelper::createDirectory(dirname($dir1)) || !$this->imageFile->saveAs($fullPath1)) {
                    $transaction->rollBack();
                    return false;
                }
            }

            // Simpan gambar kedua
            if ($this->imageFile2) {
                $dir2 = $baseDir . $this->image2;
                $fullPath2 = $baseDir . $this->image2;

                if (!FileHelper::createDirectory(dirname($dir2)) || !$this->imageFile2->saveAs($fullPath2)) {
                    $transaction->rollBack();
                    return false;
                }
            }

            // Simpan gambar ketiga
            if ($this->imageFile3) {
                $dir2 = $baseDir . $this->image3;
                $fullPath2 = $baseDir . $this->image3;

                if (!FileHelper::createDirectory(dirname($dir2)) || !$this->imageFile3->saveAs($fullPath2)) {
                    $transaction->rollBack();
                    return false;
                }
            }


            $transaction->commit();
        }
        return $ok;
    }


    public function getImageUrl()
    {
        return self::formatImageUrl($this->image1);
    }
    public function getImageUrl2()
    {
        return self::formatImageUrl($this->image2);
    }
    public function getImageUrl3()
    {
        return self::formatImageUrl($this->image3);
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
