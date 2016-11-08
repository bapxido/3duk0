<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffMemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Members Report';
$this->registerJsFile('/emis/frontend/web/js/script.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="staff-member-index box box-primary">

    <h3>Staff Members</h3>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'staff_member_id',
            'title',
            'fullname',
            //'first_name',
            //'middle_name',
            //'last_name',
            // 'birth_date',
            // 'birth_place',
            'sex',
            // 'nationality_id',
            [
				'attribute' => 'nationality_id',
				 'value' => 'nationality.nationality',
            ],
            // 'national_id',
            // 'passport_id',
            [
				'attribute' => 'staff_type_id',
				 'value' => 'staffType.staff_type',
            ],
            // 'photo',
            //~ 'remarks:ntext',
            //~ 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',

            // [                       
            // 'class' => 'yii\grid\ActionColumn',
            // 'contentOptions' => ['width' => '80px;'],
            // ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>

<htmlpagefooter name="reportfooter">
<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt;">
    <tr>
        <td width="33%"><span><?= $this->title; ?></span></td>
        <td width="33%" align="center"><span style="font-weight: bold;">{PAGENO}</span></td>
        <td width="33%" style="text-align: right;"><?= date('Y-m-d'); ?></td>
    </tr>
</table>
</htmlpagefooter>

<!-- set the headers/footers - they will occur from here on in the document -->
<!--mpdf
    <sethtmlpagefooter name="reportfooter" page="O" value="on" show-this-page="1" />
mpdf-->
