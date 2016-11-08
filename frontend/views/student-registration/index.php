<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentRegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'student_registration_id',
            'academicPeriod.academic_period',
            'student.fullname',
            'registration_number',
            'admission_date',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
