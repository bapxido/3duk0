<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounselling */

$this->title = $model->guidance_counselling_id;
$this->params['breadcrumbs'][] = ['label' => 'Guidance Counsellings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guidance-counselling-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->guidance_counselling_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->guidance_counselling_id], [
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
            // 'guidance_counselling_id',
            // [
            //     'attribute' => 'student_id',
            //     'value' => 'student.fullname',
            // ],
            // [
            //     'attribute' => 'staff_member_id',
            //     'value' => 'staffMember.fullname',
            // ],
            // 'subject_matter',
            // [
            //     'attribute' => 'gc_category_id',
            //     'value' => 'gcCategory.guidance_counselling_category',
            // ], 
            'student.fullname',
            'staffMember.fullname',
            'gcCategory.guidance_counselling_category',
            'subject_matter',
            // 'gc_category_id',
            'gc_date',
            'case:ntext',
            'remarks:ntext',
            'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_user_id',
        ],
    ]) ?>

</div>
