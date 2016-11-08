<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventsCalendar */

$this->title = 'Update Events Calendar: ' . ' ' . $model->event_id;
$this->params['breadcrumbs'][] = ['label' => 'Events Calendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->event_id, 'url' => ['view', 'id' => $model->event_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="events-calendar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
