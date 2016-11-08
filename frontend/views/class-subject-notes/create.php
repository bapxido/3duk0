<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectNotes */

$this->title = 'Create Class Subject Notes';
$this->params['breadcrumbs'][] = ['label' => 'Class Subject Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-notes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
