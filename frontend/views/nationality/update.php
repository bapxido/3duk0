<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nationality */

$this->title = 'Update Nationality: ' . ' ' . $model->nationality_id;
$this->params['breadcrumbs'][] = ['label' => 'Nationalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nationality_id, 'url' => ['view', 'id' => $model->nationality_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nationality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
