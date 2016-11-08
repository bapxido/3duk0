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
?>

<div class="student-application-form box box-primary">
	<?= "<h2>Application Details</h2>"?>
    
    <?php $form = ActiveForm::begin([
		'enableAjaxValidation'      => true,
		'enableClientValidation'    => true,
		'validateOnChange'          => true,
		'validateOnSubmit'          => true,
		'validateOnBlur'            => true,
	]);?>
    
    <?= $form->errorSummary($model); ?>
    
    <?= $form->field($model, 'student_id')->dropDownList($model->students);  ?>
    
    <?= $form->field($model, 'first_application')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'application_status')->dropDownList([ 'draft' => 'Draft', 'submitted' => 'Submitted', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'academic_period_id')->dropDownList($model->academicPeriods);  ?>
    
    
    <?= "<h2>Course Application</h2>"?>  
    <?php
    for ($i = 1; $i <= 3; $i++) {
		
    $html = "<option value=''>Select Course ...</key>";
		foreach($model->courseList as $key=>$value){
			$html .= "<option value='$key'>".$value."</key>";
			//echo "$html";
		}
	?>
	<div class="col-xs-12 col-sm-12 col-lg-12 no-padding box box-solid box-warning">
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<label class="control-label" for="course-option<?= $i; ?>"><?php echo "Option ".$i; ?></label>
		</div>
		
	   <div class="col-xs-9 col-sm-6 col-lg-6">
			<div class="form-group field-course-title required">
				<label class="control-label" for="course-title">Course</label>
				<select id="course" class="form-control" name="course_id[<?= $i; ?>]">
					<?= $html; ?>
				</select><p class="help-block help-block-error"></p>
			</div>
		</div> 
		<?php
		$html = "<option value=''>Select Attendance Type ...</key>";
			foreach($model->attendanceTypes as $key=>$value){
				$html .= "<option value='$key'>".$value."</key>";
				//echo "$html";
			}
		?>
		<div class="col-xs-9 col-sm-6 col-lg-6">
			<div class="form-group field-attendance-type-title required">
				<label class="control-label" for="attendance-type-title">Attendance Type</label>
				<select id="attendance-type" class="form-control" name="attendance_type_id[<?= $i; ?>]">
					<?= $html; ?>
				</select><p class="help-block help-block-error"></p>
			</div>
		</div>
	</div>
	<?php } ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
