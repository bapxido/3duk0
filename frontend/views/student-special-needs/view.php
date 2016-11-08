<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSpecialNeeds */

$this->title = $model->student_special_need_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Special Needs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-special-needs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_special_need_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_special_need_id], [
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
            'student_special_need_id',
            'student_id',
            'special_need',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'update_user_id',
            'create_date',
            'update_date',
        ],
    ]) ?>

</div>
