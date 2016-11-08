<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectRoll */

$this->title = $model->class_subject_enrolment_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Subject Rolls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-roll-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->class_subject_enrolment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->class_subject_enrolment_id], [
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
            'class_subject_enrolment_id',
            'student_course_id',
            'class_subject_header_id',
            'enrolment_date',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>

</div>
