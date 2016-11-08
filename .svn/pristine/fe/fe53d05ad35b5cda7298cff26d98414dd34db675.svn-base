<?php

use app\models\StudentApplication;
use app\models\StudentApplicationCourse;
use app\models\Course;
use unclead\widgets\TabularInput;
use unclead\widgets\MultipleInput;
use unclead\widgets\examples\models\ExampleModel;
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentApplication */
/* @var $form yii\widgets\ActiveForm */
$applicationcourse = new StudentApplicationCourse();
//~ $this->registerJs("
    //~ $('.delete-button').click(function() {
        //~ var detail = $(this).closest('.student-application-course');
        //~ var updateType = detail.find('.update-type');
        //~ if (updateType.val() === " . json_encode(StudentApplicationCourse::UPDATE_TYPE_UPDATE) . ") {
            //~ //marking the row for deletion
            //~ updateType.val(" . json_encode(StudentApplicationCourse::UPDATE_TYPE_DELETE) . ");
            //~ detail.hide();
        //~ } else {
            //~ //if the row is a new row, delete the row
            //~ detail.remove();
        //~ }
//~ 
    //~ });
//~ ");
?>

<div class="student-application-form box box-primary">
	<?= "<h2>Application Details</h2>"?>
     <?php $form = ActiveForm::begin([
        'enableClientValidation' => false
    ]); ?>

    <?php //$form->field($model, 'student_application_id')->textInput() ?>
    
    <?= $form->field($model, 'student_id')->dropDownList($model->students);  ?>

    <?php //$form->field($model, 'first_application')->textInput() ?>
    
    <?= $form->field($model, 'first_application')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'application_status')->dropDownList([ 'draft' => 'Draft', 'submitted' => 'Submitted', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'academic_period_id')->dropDownList($model->academicPeriods);  ?>
    
	<?= "<h2>Course Application</h2>"?>

    <?php 
		//~ foreach ($modelDetails as $i => $modelDetail) : 
		//~ $j = $i + 1;
    ?>
		
<!--
        <div class="row box box-primary student-application-course student-application-course-?= $i ?>">
			?= "<h2>Option ". $j."</h2>"?>
            <div class="col-md-10">
                ?= Html::activeHiddenInput($modelDetail, "[$i]student_application_course_id") ?>
                ?= Html::activeHiddenInput($modelDetail, "[$i]updateType", ['class' => 'update-type']) ?>
                ?php //$form->field($modelDetail, "[$i]item_name") ?>
				?= $form->field($modelDetail, "[$i]course_id")->dropDownList($modelDetail->courses, ['prompt' => 'select course...']);  ?>
				?= $form->field($modelDetail, "[$i]attendance_type_id")->dropDownList($modelDetail->attendanceTypes, ['prompt' => 'select attendance type...']);  ?>
				?php //echo $form->field($modelDetail, "[$i]application_status")->dropDownList([ 'admitted' => 'Admitted', 'rejected' => 'Rejected', 'pending' => 'Pending', '' => '', ], ['prompt' => '']) ?>
            </div>
            <div class="col-md-2">
                ?= Html::button('x', ['class' => 'delete-button btn btn-danger', 'data-target' => "student-application-course-$i"]) ?>
            </div>
        </div>
-->
        
      
    <?php //endforeach; 
    
    //~ echo TabularInput::widget([
		//~ 'models' => $dataProvider,
		//~ 'attributeOptions' => [
			//~ 'enableAjaxValidation'      => true,
			//~ 'enableClientValidation'    => false,
			//~ 'validateOnChange'          => false,
			//~ 'validateOnSubmit'          => true,
			//~ 'validateOnBlur'            => false,
		//~ ],
		//~ 'columns' => [
			//~ [
				//~ 'name'  => 'course_id',
				//~ 'title' => 'course_id',
			//~ ],
		   //~ 
		//~ ],
	//~ ]) 
	//~ $courseList = $model->courseList;
	//~ //$string = implode(', ',$courseList);
	//~ $string[] = '';
	//~ foreach ($courseList as $key => $value) {
		//~ if ($string == '') {
			//~ $string .= "'$value'";
		//~ } else {
			//~ $string[]= $value;
			//~ 
		//~ //}
	//~ }
	//~ 
	//~ //$data[] = $string;
	//~ $string[] = "Electrical";
	//~ print_r ($string);
	?>

	
    <?= $form->field($model, 'applicationcourse')->widget(MultipleInput::className(), [
    'limit' => 5,
    'allowEmptyList' => true,
        'enableGuessTitle' => true,
    'columns' => [
        [
            'name'  => 'course_id',
            'title' => 'Course',
             'type'  => 'dropDownList',
             //'type'=>MultipleInput::INPUT_WIDGET, 
            'defaultValue' => 1,
            'items' => $applicationcourse->courses,//$attendanceTypes,
        ],
         //~ [
			//~ 'name'  => 'course_id',
			//~ 'title' => 'Course',
			 //~ //'type'  => 'dropDownList',
			//~ 'type'=>\kartik\typeahead\Typeahead::classname(), 
			//~ 'options' => [
					//~ //'model' => $model->applicationcourse, 
					//~ //'attribute' => 'state_4',
					//~ 'options' => ['placeholder' => 'Filter as you type ...'],
					//~ 'pluginOptions' => ['highlight'=>true],
					//~ 'dataset' => [
						//~ [
							//~ 'local' => $model->courseList,
							//~ 'limit' => 10
						//~ ]
					//~ ],
				//~ ],
				//~ 
        //~ ],
         [
            'name'  => 'attendance_type_id',
            'title' => 'Attendance Type',
             'type'  => 'dropDownList',
            'defaultValue' => 0,
            'items' => $model->applicationcourse->attendanceTypes,//$attendanceTypes,
        ],
    ],
]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::submitButton('Add row', ['name' => 'addRow', 'value' => 'true', 'class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
