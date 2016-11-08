<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentSpecialNeeds */

$this->title = 'Create Student Special Needs';
$this->params['breadcrumbs'][] = ['label' => 'Student Special Needs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-special-needs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
