<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaffMember */

$this->title = $model->title . ' ' . $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Staff Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fullname, 'url' => ['view', 'id' => $model->staff_member_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-member-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
