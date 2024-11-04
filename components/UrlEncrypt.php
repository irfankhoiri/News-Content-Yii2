<?php

namespace app\components;

class urlEncrypt
{
    // Define a secret key (should be stored securely)
    private static $key = 'your-secret-key';

    // Encrypt the data (ID in this case)
    public static function encrypt($data)
    {
        return base64_encode(\Yii::$app->getSecurity()->encryptByPassword($data, self::$key));
    }

    // Decrypt the data (ID)
    public static function decrypt($encryptedData)
    {
        return \Yii::$app->getSecurity()->decryptByPassword(base64_decode($encryptedData), self::$key);
    }
}
