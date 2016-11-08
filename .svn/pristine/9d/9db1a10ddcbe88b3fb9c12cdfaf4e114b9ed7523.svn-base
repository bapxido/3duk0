<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nationality */

$this->title = $model->nationality_id;
$this->params['breadcrumbs'][] = ['label' => 'Nationalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nationality-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nationality_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nationality_id], [
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
            'nationality_id',
            'nationality',
            'remarks:ntext',
            'record_status',
        ],
    ]) ?>

</div>
