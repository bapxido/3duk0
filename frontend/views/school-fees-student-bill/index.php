<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolFeesStudentBillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Fees Student Bills';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-student-bill-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Fees Student Bill', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_fees_student_bill_id',
            'school_fees_id',
            'student_id',
            'bill_date',
            'bill_amount',
            // 'paid_amount',
            // 'balance',
            // 'remarks:ntext',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
