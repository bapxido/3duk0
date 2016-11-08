<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SpecialNeed */

$this->title = $model->special_need_id;
$this->params['breadcrumbs'][] = ['label' => 'Special Needs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-need-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->special_need_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->special_need_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'special_need_id',
            'special_need',
            'remarks:ntext',
            'record_status',
        ],
    ]) ?>

</div>
