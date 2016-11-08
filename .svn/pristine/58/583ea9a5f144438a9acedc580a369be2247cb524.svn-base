<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplication */

$this->title = $model->student_application_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-view box box-primary">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_application_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_application_id], [
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
            'student_application_id',
            'application_date',
            'first_application',
            'application_status',
            'academic_period_id',
            'create_user_id',
            'update_user_id',
            'create_date',
            'update_date',
            'record_status',
        ],
    ]) ?>

</div>
