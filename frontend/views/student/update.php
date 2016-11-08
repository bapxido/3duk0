<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = 'Update Student: ' . ' ' . $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fullname, 'url' => ['view', 'id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
