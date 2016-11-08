<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-index box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_application_id',
            'application_date',
            'first_application',
            'application_status',
            // 'academic_period_id',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
