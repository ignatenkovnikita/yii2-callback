<?php

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CallbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('callback', 'Callbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'post_data:ntext',
//            'ged_data:ntext',
//            'header_data:ntext',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>

</div>
