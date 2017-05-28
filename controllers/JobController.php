<?php

namespace app\controllers;

class JobController extends \yii\web\Controller{
    public function actionCreate(){
        $foo ='Bar';
        return $this->render('create', ['foo' => $foo]);
    }

    public function actionDelete(){
        return $this->render('delete');
    }

    public function actionEdit(){
        return $this->render('edit');
    }

    public function actionIndex(){
        return $this->render('index');
    }

}
