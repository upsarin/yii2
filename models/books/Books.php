<?php

namespace app\models\books;

use Yii;
use app\models\authors\Authors;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property int $author
 */
class Books extends \yii\db\ActiveRecord
{
    var $author_name;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
            [['author'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
        ];
    }
    public static function getAll(){
        $elements = self::find()->all();
        if(count($elements)){
            foreach($elements as $element => $val){
                $author = Authors::find()
                    ->where(['id' => $val->author])
                    ->one();
                $val->author_name = $author->name;
            }
        }
        return $elements;
    }
}
