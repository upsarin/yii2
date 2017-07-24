<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\books\Books;

class BooksController extends Controller {
    public function actionIndex(){
        $elements = Books::getAll();
        return $this->render('index', ['books'=>$elements]);
    }
}