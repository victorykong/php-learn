<?php

namespace app\controllers;

use yii\web\Controller;


class StudyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('/site/study'); // /html/views/site/study.php
    }
}

