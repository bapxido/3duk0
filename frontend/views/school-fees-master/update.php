<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesMaster */

$this->title = 'Update School Fees Master: ' . ' ' . $model->school_fees_id;
$this->params['breadcrumbs'][] = ['label' => 'School Fees Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_fees_id, 'url' => ['view', 'id' => $model->school_fees_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-fees-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
