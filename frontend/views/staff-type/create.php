<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffType */

$this->title = 'Create Staff Type';
$this->params['breadcrumbs'][] = ['label' => 'Staff Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
