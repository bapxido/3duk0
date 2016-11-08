<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberContacts */

$this->title = $model->staff_member_contact_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Member Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-contacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->staff_member_contact_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->staff_member_contact_id], [
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
            // 'staff_member_contact_id',
            'staffMember.fullname',
            'postal_address',
            'physical_address',
            'town_village',
            'country',
            'telephone',
            'mobile',
            'email:email',
            'remarks:ntext',
            'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',
        ],
    ]) ?>

</div>
