<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = $model->faculty;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->faculty_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->faculty_id], [
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
            //'faculty_id',
            'faculty',
            'remarks:ntext',
            'record_status',
            //~ 'create_user_id',
            //~ 'create_date',
            //~ 'update_user_id',
            //~ 'update_date',
        ],
    ]) ?>

</div>
