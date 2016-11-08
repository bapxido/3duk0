<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AttendanceGeneral */

$this->title = 'Update Attendance General: ' . ' ' . $model->attendance_general_id;
$this->params['breadcrumbs'][] = ['label' => 'Attendance Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attendance_general_id, 'url' => ['view', 'attendance_general_id' => $model->attendance_general_id, 'academic_day_id' => $model->academic_day_id, 'student_id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="attendance-general-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
