<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentContacts */

$this->title = 'Create Student Contacts';
$this->params['breadcrumbs'][] = ['label' => 'Student Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-contacts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
