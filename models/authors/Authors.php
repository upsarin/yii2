<?php

namespace app\models\authors;

use Yii;
use app\models\books\Books;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 */
class Authors extends \yii\db\ActiveRecord
{
    var $books;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    public static function getAll(){
        $elements = self::find()->all();
        foreach($elements as $element => $val){
            $book = Books::find()
                ->where(['author' => $val->id])
                ->all();
            $val->books = $book;
        }
        return $elements;
    }
    /*
         * не работает
         *static function getBooks(){
            return $this->hasOne(Books::className(), ['author' => 'id']);
        }
    */
}
