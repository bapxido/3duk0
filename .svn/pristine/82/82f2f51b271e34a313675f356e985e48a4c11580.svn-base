<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentBatchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-batches-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Batches', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'student_id',
            'batch_id',
            'create_date',
            'update_date',
            // 'create_user_id',
            // 'update_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
