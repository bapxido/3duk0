<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMember */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Staff Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->staff_member_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->staff_member_id], [
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
            'staff_member_id',
            'title',
            'first_name',
            'middle_name',
            'last_name',
            'birth_date',
            'birth_place',
            'sex',
            'nationality_id',
            'national_id',
            'passport_id',
            'staff_type_id',
            'photo',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'update_user_id',
            'create_date',
            'update_date',
        ],
    ]) ?>

</div>
