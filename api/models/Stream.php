<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17.11.16
 * Time: 20:39
 */

namespace app\models;

use yii\db\ActiveRecord;

class Stream extends ActiveRecord
{
    public static function primaryKey()
    {
        return ['id'];
    }
}
