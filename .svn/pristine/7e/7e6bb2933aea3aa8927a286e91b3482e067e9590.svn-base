<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\StudentApplicationCourse;

/**
 * This is the model class for table "student_application".
 *
 * @property integer $student_application_id
 * @property string $application_date
 * @property integer $first_application
 * @property integer $attendance_type_id
 * @property string $application_status
 * @property integer $academic_period_id
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 */
class StudentApplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $applicationcourse; 
    
    public function init()
    {
        parent::init();

        $this->applicationcourse = new StudentApplicationCourse();//$this->studentApplicationCourses;
        //~ [
            //~ [
                //~ 'day'       => '27.02.2015',
                //~ 'user_id'   => 1,
                //~ 'priority'  => 1
            //~ ],
            //~ [
                //~ 'day'       => '27.02.2015',
                //~ 'user_id'   => 2,
                //~ 'priority'  => 2
            //~ ],
        //~ ];
     }
     
    public static function tableName()
    {
        return 'student_application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'first_application', 'academic_period_id'], 'required'],
            [['student_id', 'academic_period_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['application_date', 'create_date', 'update_date'], 'safe'],
            [['first_application','application_status'], 'string'],
            //[['application'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_application_id' => 'Student Application ID',
            'application_date' => 'Application Date',
            'first_application' => 'First Application',
            'student_id'=> 'Student ID',
            'application_status' => 'Application Status',
            'academic_period_id' => 'Academic Period ID',
            'create_user_id' => 'Create User ID',
            'update_user_id' => 'Update User ID',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }
    
    //~ public function getAcademicPeriods()
    //~ {
        //~ return $this->hasMany(AcademicPeriod::className(), ['academic_period_id' => 'academic_period_id']);
    //~ }
    public function getAcademicPeriods() { // could be a static func as well
        $models = AcademicPeriod::find()->asArray()->all();
        return ArrayHelper::map($models, 'academic_period_id', 'academic_period');
    }
    
    public function getStudents() { // could be a static func as well
        $models = Student::find()->asArray()->all();
        return ArrayHelper::map($models, 'student_id', 'fullname');
    }
    
    public function getStudentApplicationCourses()
    {
        return $this->hasMany(StudentApplicationCourse::className(), ['student_application_id' => 'student_application_id']);
    }
    
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'fullname']);
    }
    public function getCourseList() { // could be a static func as well
         $models = Course::find()->asArray()->all();
         return ArrayHelper::map($models, 'course_id', 'course');;
         //~ foreach ($models as $i => $course) {
			 //~ //$modelCourses[] = $course->course;
		 //~ }
		//$courses = ArrayHelper::getColumn($models, 'course');
		 //return $courses;
    }
    public function getAttendanceTypes() { // could be a static func as well
        $models = AttendanceType::find()->asArray()->all();
        return ArrayHelper::map($models, 'attendance_type_id', 'attendance_type');
    }
}
