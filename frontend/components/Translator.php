<?php

namespace frontend\components;

use Yii;

class Translator
{
    public static function translate($message)
    {
        $language = Yii::$app->getRequest()->getCookies()->getValue('language', 'id');
        // Log untuk memeriksa bahasa yang sedang digunakan
        Yii::info("Bahasa yang digunakan: $language");

        // Lakukan penerjemahan berdasarkan bahasa yang dipilih
        if ($language == 'en') {
            // Terjemahkan ke Bahasa Inggris
            // Anda bisa menambahkan logika penerjemahan di sini
            return $message;
        } else {
            // Bahasa default adalah Bahasa Indonesia
            return $message;
        }
    }
}
