<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentGuardianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Guardians';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('/emis/frontend/web/js/script.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="student-guardian-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Guardian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_guardian_id',
            'student_id',
            'first_name',
            'middle_name',
            'last_name',
            // 'relationship',
            // 'telephone',
            // 'mobile',
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