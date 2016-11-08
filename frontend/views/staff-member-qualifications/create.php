<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberQualifications */

$this->title = 'Create Staff Member Qualifications';
$this->params['breadcrumbs'][] = ['label' => 'Staff Member Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-qualifications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
