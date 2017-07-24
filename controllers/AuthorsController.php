<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\authors\Authors;


class AuthorsController extends Controller {
    public function actionIndex(){
        $elements = Authors::find()->all();
        $books = Authors::getBooks();
        return $this->render('index', [
            'authors'=>$elements,
            'books'=>$books
        ]);
    }
}