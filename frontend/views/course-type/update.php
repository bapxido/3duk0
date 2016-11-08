<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CourseType */

$this->title = 'Update Course Type: ' . ' ' . $model->course_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Course Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_type_id, 'url' => ['view', 'id' => $model->course_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
