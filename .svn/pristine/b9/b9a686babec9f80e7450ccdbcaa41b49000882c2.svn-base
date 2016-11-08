<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentCourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-course-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_course_id',
            'student_id',
            'course_id',
            'enrolment_start_date',
            'enrolment_end_date',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
