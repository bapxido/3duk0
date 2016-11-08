<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentAdmission */

$this->title = 'Update Student Admission: ' . ' ' . $model->student_admission_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_admission_id, 'url' => ['view', 'id' => $model->student_admission_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-admission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
