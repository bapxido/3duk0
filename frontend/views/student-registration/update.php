<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentRegistration */

$this->title = 'Update Student Registration: ' . ' ' . $model->student_registration_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_registration_id, 'url' => ['view', 'id' => $model->student_registration_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-registration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
