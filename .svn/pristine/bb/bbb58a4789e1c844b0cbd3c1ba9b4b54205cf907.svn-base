<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentContacts */

$this->title = $model->student_contact_id;
$this->params['breadcrumbs'][] = ['label' => 'Student Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-contacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_contact_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_contact_id], [
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
            'student_contact_id',
            'student_id',
            'physical_address',
            'postal_address',
            'town_village',
            'country',
            'telephone',
            'mobile',
            'email:email',
            'remarks:ntext',
            'record_status',
            'create_user_id',
            'update_user_id',
            'create_date',
            'update_date',
        ],
    ]) ?>

</div>
