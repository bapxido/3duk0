<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = 'Update Faculty: ' . ' ' . $model->faculty;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->faculty, 'url' => ['view', 'id' => $model->faculty_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faculty-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
