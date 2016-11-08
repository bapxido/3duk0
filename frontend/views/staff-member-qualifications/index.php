<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffMemberQualificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Member Qualifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-member-qualifications-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Member Qualifications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'staff_member_qualification_id',
            'staff_member_id',
            'qualification',
            'institution',
            'training_start_date',
            // 'training_end_date',
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
