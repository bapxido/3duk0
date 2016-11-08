<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Relationship */

$this->title = $model->relationship_id;
$this->params['breadcrumbs'][] = ['label' => 'Relationships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relationship-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->relationship_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->relationship_id], [
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
            'relationship_id',
            'relationship',
            'remarks:ntext',
            'record_status',
        ],
    ]) ?>

</div>
