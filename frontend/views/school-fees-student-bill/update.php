<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesStudentBill */

$this->title = 'Update School Fees Student Bill: ' . ' ' . $model->school_fees_student_bill_id;
$this->params['breadcrumbs'][] = ['label' => 'School Fees Student Bills', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_fees_student_bill_id, 'url' => ['view', 'id' => $model->school_fees_student_bill_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-fees-student-bill-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
