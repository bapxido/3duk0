<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpecialNeed */

$this->title = 'Create Special Need';
$this->params['breadcrumbs'][] = ['label' => 'Special Needs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-need-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
