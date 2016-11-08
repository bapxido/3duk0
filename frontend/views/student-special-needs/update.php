<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSpecialNeeds */

$this->title = 'Update Student Special Needs: ';
$this->params['breadcrumbs'][] = ['label' => 'Student Special Needs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_special_need_id, 'url' => ['view', 'id' => $model->student_special_need_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-special-needs-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
