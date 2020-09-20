<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Callback */

$this->title = Yii::t('callback', 'Create {modelClass}', [
    'modelClass' => 'Callback',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('callback', 'Callbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
