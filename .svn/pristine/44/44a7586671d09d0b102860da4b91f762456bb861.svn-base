<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplicationCourse */

$this->title = $model->student_application_course_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Application Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-course-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_application_course_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_application_course_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'student_application_course_id',
            'student_application_id',
            'course_id',
            'attendance_type_id',
            'application_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
            'record_status',
        ],
    ]) ?>

</div>
