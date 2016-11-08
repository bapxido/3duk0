<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TestExamMarks */

$this->title = $model->test_exam_mark_id;
$this->params['breadcrumbs'][] = ['label' => 'Test Exam Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-exam-marks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->test_exam_mark_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->test_exam_mark_id], [
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
            'test_exam_mark_id',
            'class_test_id',
            'student_id',
            'marks_obtained',
            'maximum_score',
            'percentage',
            'remarks:ntext',
            'record_status',
            'create_date',
            'create_user_id',
            'update_date',
            'update_user_id',
        ],
    ]) ?>

</div>
