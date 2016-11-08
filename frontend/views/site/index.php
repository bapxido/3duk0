<?php
/* @var $this yii\web\View */
use app\models\User;
use yii\widgets\chat;
use nirvana\showloading\ShowLoadingAsset;
use app\models\Student;
use app\models\StudentSearch;
use yii\helpers\Html;
use \fruppel\googlecharts\GoogleCharts;
use scotthuangzl\googlechart\GoogleChart;

use kartik\widgets\ActiveForm;
use kartik\builder\Form;

ShowLoadingAsset::register($this);

//use dektrium\user\models\User;

$this->title = 'Skymouse Eduko EMIS';
//echo $female;
?>
<div class="site-index">
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box">
			<!-- small box -->
			<div class="small-box bg-aqua">
                <div class="inner">
                  <h3>15</h3>
                  <p>Messages</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
		  </div><!-- /.info-box -->
		</div><!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box">
			  <!-- small box -->
			<div class="small-box bg-red">
                <div class="inner">
                  <h3>15</h3>
                  <p>Classes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-group"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div><!-- /.info-box-content -->
		  </div><!-- /.info-box -->
		</div><!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box">
			<!-- small box -->
			<div class="small-box bg-yellow">
                <div class="inner">
                  <h3 id="studentcount">0</h3>
                  <p>Students</p>
                </div>
                <div class="icon">
                  <i class="fa fa-graduation-cap"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              
		  </div><!-- /.info-box -->
		</div><!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box">
			<!-- small box -->
			<div class="small-box bg-green">
                <div class="inner">
                  <h3 id="teachersCount">0</h3>
                  <p>Teachers</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              
		  </div><!-- /.info-box -->
		</div><!-- /.col -->
	  </div><!-- row -->
	  
	 <div class="stats_bar">
		<div data-step="2" data-intro="<strong>Beautiful Elements</strong> <br/> If you are looking for a different UI, this is for you!." class="butpro butstyle">
				<div class="sub">
				  <h2>EXITS</h2>
				  <span id="total_clientes">170</span>
				</div>
				<div class="stat">
					<span class="spk1">
						<li class="fa fa-user"></li>
						<canvas height="13" width="74" style="display: inline-block; width: 74px; height: 13px; vertical-align: top;backgroud-color:#ccc;"></canvas>
					</span>
				</div>
		</div>
		
		<div class="butpro butstyle">
			<div class="sub">
				<h2>ENROLMENTS</h2>
					<span>12,611</span>
			</div>
			<div class="stat">
				<span class="up"> 13,5%</span>
			</div>
		</div>
		
		<div class="butpro butstyle">
			<div class="sub">
				<h2>VISITS</h2>
				<span>125</span>
			</div>
			<div class="stat">
				<span class="down"> 20,7%</span>
			</div>
		</div>
		
		<div class="butpro butstyle">
			<div class="sub">
				<h2>NEW USERS</h2>
				<span>18</span>
			</div>
			<div class="stat">
				<span class="equal"> 0%</span>
			</div>
		</div>
		
		<div class="butpro butstyle">
			<div class="sub">
				<h2>AVERAGE</h2>
				<span>3%</span>
			</div>
			<div class="stat">
				<span class="spk2">
					<canvas height="13" width="80" style="display: inline-block; width: 80px; height: 13px; vertical-align: top;"></canvas>
				</span>
			</div>
		</div>
		
		<div class="butpro butstyle">
			<div class="sub">
				<h2>Downloads</h2>
				<span>184</span>
			</div>
			<div class="stat">
				<span class="spk3">
					<canvas height="13" width="80" style="display: inline-block; width: 80px; height: 13px; vertical-align: top;"></canvas>
				</span>
			</div>
		</div>
	</div>
			
    <div class="body-content">

        <div class="row">
            <div class="col-lg-8">
                <div id="events">
					<div id="loading" class="loading"></div>
                </div>
                <pre>
				   <div id="piea" style="min-width: 400px; height: 300px; max-width: 600px; margin: 0 auto; padding:10px"> 
				<?=GoogleChart::widget(array('visualization' => 'PieChart',
                'data' => $sex,
                'options' => array('title' => 'Students by Gender','is3D' => true),
                ));?>


				<?php

				$wizard_config = [
					'id' => 'stepwizard',
					'steps' => [
						[
							'title' => 'Step 1',
							'icon' => 'glyphicon glyphicon-cloud-download',
							'content' => '<h3>Step 1</h3>This is step 1',
							'buttons' => [
								'next' => [
									'title' => 'Forward', 
									'options' => [
										//'class' => 'disabled'
									],
								 ],
							 ],
						],
						[
							'title' => 'Step 2',
							'icon' => 'glyphicon glyphicon-cloud-upload',
							//'content' => '<h3>Step 2</h3>This is step 2',
							'content' => '<div id="students">students</div>',
							//'skippable' => true,
						],
						[
							'title' => 'Step 3',
							'icon' => 'glyphicon glyphicon-transfer',
							'content' => '<h3>Step 3</h3>This is step 3',
						],
					],
					'complete_content' => "You are done!", // Optional final screen
					'start_step' => 2,
				];
				?></div>
				</pre>
            </div>
           
            <div class="col-lg-4">
                <div id="bulletin"></div> 
			</div>
        </div>

    </div>

<?php //echo \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>

</div>


<?php
        
$script = <<< JS
$(document).ready(function(){
	var url = "?r=site%2Flogin";
	$('.content').find("#loading").showLoading();
	$('#students').load('index.php?r=student/create');
});

var female
var male

$(function(){

$.ajax({
			url: '?r=student/stat',
			dataType: "json",
			success: function(data) {
				if(data.error) {
						alert(data.error);
				} else if(data.female) {
						female = data.female;
						male = data.male;
						female_num = data.female_num
						male_num = data.male_num
						
				} else {
						alert("Response in invalid format!");
				}
			}
	});
 
});

$(window).load(function() {
	$('.content').find("#loading").hideLoading();
});
JS;
$this->registerJs($script);
    ?>



