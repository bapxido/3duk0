<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DayType */

$this->title = 'Create Day Type';
$this->params['breadcrumbs'][] = ['label' => 'Day Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="day-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
