<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberQualifications */

$this->title = $model->staff_member_qualification_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Member Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-qualifications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->staff_member_qualification_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->staff_member_qualification_id], [
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
            'staff_member_qualification_id',
            'staff_member_id',
            // 'qualification',
            'institution',
            'training_start_date',
            'training_end_date',
            'remarks:ntext',
            'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',
        ],
    ]) ?>

</div>
