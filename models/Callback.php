<?php

namespace ignatenkovnikita\callback\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "callback".
 *
 * @property integer $id ID
 * @property string $post_data Post Data
 * @property string $get_data Get Data
 * @property string $header_data Header Data
 * @property integer $created_at Created At
 * @property integer $updated_at Updated At
 * @property integer $created_by Created By
 * @property integer $updated_by Updated By
*/
class Callback extends ActiveRecord
{

    /**
     * @inheritdoc
    */
    public function behaviors()
    {
        return [
            'timestamp' => \yii\behaviors\TimestampBehavior::class,
            'author' => \yii\behaviors\BlameableBehavior::class,
        ];
    }

    /**
    * @inheritdoc
    */
    public static function tableName()
    {
        return '{{%callback}}';
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [
            [['post_data', 'get_data', 'header_data'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
        ];
    }

    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_data' => 'Post Data',
            'get_data' => 'Get Data',
            'header_data' => 'Header Data',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            ];
    }
    
    /**
     * @inheritdoc
     * @return CallbackQuery the active query used by this AR class.
    */
    public static function find()
    {
        return new CallbackQuery(get_called_class());
    }
}
