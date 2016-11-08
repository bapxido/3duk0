<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentBatches */

$this->title = 'Create Student Batches';
$this->params['breadcrumbs'][] = ['label' => 'Student Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-batches-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
