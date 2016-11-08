<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentGuardian */

$this->title = 'Update Student Guardian: ' . ' ' . $model->student_guardian_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Guardians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_guardian_id, 'url' => ['view', 'id' => $model->student_guardian_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-guardian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
