<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventsCalendar */

$this->title = 'Create Events Calendar';
$this->params['breadcrumbs'][] = ['label' => 'Events Calendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-calendar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
