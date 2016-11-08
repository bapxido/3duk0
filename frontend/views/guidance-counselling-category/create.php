<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounsellingCategory */

$this->title = 'Create Guidance Counselling Category';
$this->params['breadcrumbs'][] = ['label' => 'Guidance Counselling Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guidance-counselling-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
