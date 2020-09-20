<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Callback */

$this->title = Yii::t('callback', 'Update {modelClass}: ', [
    'modelClass' => 'Callback',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('callback', 'Callbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('callback', 'Update');
?>
<div class="callback-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
