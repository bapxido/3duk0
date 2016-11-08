<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClassLessonPlan */

$this->title = 'Create Class Lesson Plan';
$this->params['breadcrumbs'][] = ['label' => 'Class Lesson Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-lesson-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
