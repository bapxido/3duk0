<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounselling */

$this->title = 'Update Guidance Counselling: ' . ' ' . $model->guidance_counselling_id;
$this->params['breadcrumbs'][] = ['label' => 'Guidance Counsellings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guidance_counselling_id, 'url' => ['view', 'id' => $model->guidance_counselling_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guidance-counselling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
