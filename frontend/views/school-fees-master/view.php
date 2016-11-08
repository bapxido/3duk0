<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesMaster */

$this->title = $model->school_fees_id;
$this->params['breadcrumbs'][] = ['label' => 'School Fees Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_fees_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_fees_id], [
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
            'school_fees_id',
            'school_fees',
            'academic_period_id',
            'amount',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>

</div>
