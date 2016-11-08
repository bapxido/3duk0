<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AttendanceGeneral */

$this->title = $model->attendance_general_id;
$this->params['breadcrumbs'][] = ['label' => 'Attendance Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendance-general-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'attendance_general_id' => $model->attendance_general_id, 'academic_day_id' => $model->academic_day_id, 'student_id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'attendance_general_id' => $model->attendance_general_id, 'academic_day_id' => $model->academic_day_id, 'student_id' => $model->student_id], [
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
            'attendance_general_id',
            'academic_day_id',
            'student_id',
            'attendance_status',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>

</div>
