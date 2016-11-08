<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-contacts-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Contacts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_contact_id',
            'student_id',
            'physical_address',
            'postal_address',
            'town_village',
            // 'country',
            // 'telephone',
            // 'mobile',
            // 'email:email',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
