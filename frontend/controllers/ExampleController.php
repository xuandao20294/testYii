<?php
namespace frontend\controllers;
use yii\web\Controller;
class ExampleController extends Controller {

    public function actions() {
        return [
            'greeting' => 'frontend\components\GreetingAction',
        ];
    }
    public function actionIndex() {
        $message = "index action of the ExampleController";
        return $this->render("example",[
            'message' => $message
        ]);
    }
}
?>