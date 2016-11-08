<?php

use yii\helpers\Html;
use yii\grid\GridView;
 box box-primary

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffMemberContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Member Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-contacts-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Member Contacts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'staff_member_contact_id',
            'staff_member_id',
            'postal_address',
            'physical_address',
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
