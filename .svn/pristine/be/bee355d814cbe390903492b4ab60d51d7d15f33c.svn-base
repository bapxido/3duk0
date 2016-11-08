<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DayType */

$this->title = $model->day_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Day Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="day-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->day_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->day_type_id], [
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
            'day_type_id',
            'day_type',
            'remarks:ntext',
            'record_status',
        ],
    ]) ?>

</div>
