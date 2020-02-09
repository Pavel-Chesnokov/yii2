<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Test;
class TestController extends Controller {
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);
        // print_r($list);die;
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('pavel.chestnyy@mail.ru')
                ->setTo('pavel.chestnyy@mail.ru')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
                var_dump($result);
                die;
    }
}