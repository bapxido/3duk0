<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassLessonPlan */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Class Lesson Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-lesson-plan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->lesson_plan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->lesson_plan_id], [
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
            'lesson_plan_id',
            'class_subject_header_id',
            'title',
            'notes:ntext',
            'lesson_date',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>

</div>
