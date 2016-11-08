<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounsellingCategory */

$this->title = 'Update Guidance Counselling Category: ' . ' ' . $model->gc_category_id;
$this->params['breadcrumbs'][] = ['label' => 'Guidance Counselling Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gc_category_id, 'url' => ['view', 'id' => $model->gc_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guidance-counselling-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
