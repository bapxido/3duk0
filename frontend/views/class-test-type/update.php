<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassTestType */

$this->title = 'Update Class Test Type: ' . ' ' . $model->class_test_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Test Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->class_test_type_id, 'url' => ['view', 'id' => $model->class_test_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="class-test-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
