<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectAssignment */

$this->title = $model->assignment_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Subject Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-assignment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->assignment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->assignment_id], [
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
            // 'assignment_id',
            // 'class_subject_header_id',
            'classSubjectHeader.class_subject_name',
            'assignment_title',
            'assignment_issue_date',
            'assignment_due_date',
            // 'assignment_document',
            'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_id',
        ],
    ]) ?>

</div>
