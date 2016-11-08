<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BatchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batches-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Batches', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'batch_id',
            'batch_name',
            'batch_course_id',
            'batch_alias',
            'start_date',
            // 'end_date',
            // 'create_user_id',
            // 'create_date',
            // 'update_date',
            // 'update_user_id',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
