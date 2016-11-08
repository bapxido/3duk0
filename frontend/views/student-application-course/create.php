<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentApplicationCourse */

$this->title = 'Create Student Application Course';
$this->params['breadcrumbs'][] = ['label' => 'Student Application Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
