<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplication */

$this->title = 'Update Student Application: ' . ' ' . $model->student_application_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_application_id, 'url' => ['view', 'id' => $model->student_application_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
