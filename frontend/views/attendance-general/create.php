<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AttendanceGeneral */

$this->title = 'Create Attendance General';
$this->params['breadcrumbs'][] = ['label' => 'Attendance Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendance-general-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
