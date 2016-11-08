<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AcademicPeriod */

$this->title = 'Create Academic Period';
$this->params['breadcrumbs'][] = ['label' => 'Academic Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-period-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
