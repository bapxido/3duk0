<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffMemberContacts */

$this->title = 'Create Staff Member Contacts';
$this->params['breadcrumbs'][] = ['label' => 'Staff Member Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-contacts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
