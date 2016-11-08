<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesPayment */

$this->title = 'Create School Fees Payment';
$this->params['breadcrumbs'][] = ['label' => 'School Fees Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
