<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassTest */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Class Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-test-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->class_test_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->class_test_id], [
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
            'class_test_id',
            'class_subject_header_id',
            'title',
            'class_test_type_id',
            'test_document',
            'maximum_score',
            'test_date',
            'remarks:ntext',
            'record_status',
            'create_date',
            'create_user_id',
            'update_date',
            'update_user_id',
        ],
    ]) ?>

</div>
