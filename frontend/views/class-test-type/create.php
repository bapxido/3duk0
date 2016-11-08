<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClassTestType */

$this->title = 'Create Class Test Type';
$this->params['breadcrumbs'][] = ['label' => 'Class Test Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-test-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
