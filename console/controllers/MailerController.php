<?php
namespace console\controllers;
use Yii;
class MailerController extends \yii\console\controller {
 public function actionSend(){
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