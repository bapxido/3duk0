<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TestExamMarks */

$this->title = 'Create Test Exam Marks';
$this->params['breadcrumbs'][] = ['label' => 'Test Exam Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-exam-marks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
