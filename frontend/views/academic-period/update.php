<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicPeriod */

$this->title = 'Update Academic Period: ' . ' ' . $model->academic_period_id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->academic_period_id, 'url' => ['view', 'id' => $model->academic_period_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-period-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
