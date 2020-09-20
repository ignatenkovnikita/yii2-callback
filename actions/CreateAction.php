<?php
namespace ignatenkovnikita\callback\actions;


use yii\web\Response;

class CreateAction extends \yii\base\Action
{
    public $checkAccess;

    public function run()
    {
        if ($this->checkAccess) {
            call_user_func($this->checkAccess, $this->id);
        }

        $model = new \ignatenkovnikita\callback\models\Callback();

        $model->post_data = json_encode(\Yii::$app->request->bodyParams);
        $model->header_data = json_encode(\Yii::$app->request->headers->toArray());
        $model->get_data = json_encode(\Yii::$app->request->queryParams);
        if (!$model->save()) {
            throw  new Exception('Error save webhook, errors ' . print_r($model->errors, true));
        }
    }
}