<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentApplicationCourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Application Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Application Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_application_course_id',
            'student_application_id',
            'course_id',
            'attendance_type_id',
            'application_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
