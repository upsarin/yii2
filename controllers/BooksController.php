<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\books\Books;

class BooksController extends Controller {
    public function actionIndex(){
        $model = Books::find()->all();
        return $this->render('index', ['books'=>$model]);
    }
}