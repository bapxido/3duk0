<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplicationCourse */

$this->title = 'Update Student Application Course: ' . ' ' . $model->student_application_course_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Application Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_application_course_id, 'url' => ['view', 'id' => $model->student_application_course_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-application-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
