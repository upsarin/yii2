<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class V1Controller extends ActiveController
{
    public $modelClass = 'app\models\User';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return "rest API";
    }
    public function actionBooks()
    {
        return "rest API";
    }
}
