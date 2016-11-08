<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentAdmissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Admissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-admission-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Admission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_admission_id',
            'admission_date',
            'academic_period_id',
            'create_user_id',
            'create_date',
            // 'update_user_id',
            // 'update_date',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
