<?php

namespace backend\models;

use yii\helpers\FileHelper;
use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property string|null $nama
 * @property int|null $nip
 * @property int|null $kriteria
 * @property string|null $tmp_tgl_lahir
 * @property string|null $email
 * @property string|null $pendidikan_sarjana
 * @property string|null $pendidikan_magister
 * @property string|null $pendidikan_doktoral
 * @property string|null $kepakaran
 * @property string|null $mata_kuliah
 * @property string|null $image
 * @property string|null $detail
 * @property string|null $publikasi
 *
 * @property Kriteria $kriteria0
 */
class Dosen extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama'], 'required'],
            [['nip', 'kriteria'], 'integer'],
            [['nama', 'email', 'pendidikan_sarjana', 'pendidikan_magister', 'pendidikan_doktoral', 'kepakaran', 'detail', 'publikasi'], 'string', 'max' => 255],
            [['tmp_tgl_lahir'], 'string', 'max' => 200],
            [['mata_kuliah', 'image'], 'string', 'max' => 2555],
            [['kriteria'], 'exist', 'skipOnError' => true, 'targetClass' => Kriteria::class, 'targetAttribute' => ['kriteria' => 'id_kriteria']],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg', 'jpeg', 'webp'], 'maxSize' => 5 * 1024 * 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'kriteria' => 'Kriteria',
            'tmp_tgl_lahir' => 'Tmp Tgl Lahir',
            'email' => 'Email',
            'riwayat_pen' => 'Riwayat Pen',
            'kepakaran' => 'Kepakaran',
            'pendidikan_sarjana' => 'Pendidikan Serjana',
            'pendidikan_magister' => 'Pendidikan Magister',
            'pendidikan_doktoral' => 'Pendidikan Doktoral',
            'mata_kuliah' => 'Mata Kuliah',
            'image' => 'Image',
            'detail' => 'Detail',
            'publikasi' => 'Publikasi',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->imageFile) {
            $this->image = '/dosen/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
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
     * Gets query for [[Kriteria0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKriteria0()
    {
        return $this->hasOne(Kriteria::class, ['id_kriteria' => 'kriteria']);
    }
}
