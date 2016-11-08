<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%student_application_course}}".
 *
 * @property integer $student_application_course_id
 * @property integer $application_id
 * @property integer $course_id
 * @property integer $attendance_type_id
 * @property string $application_status
 */
class StudentApplicationCourse extends \yii\db\ActiveRecord
{
	/**
     * these are flags that are used by the form to dictate how the loop will handle each item
     */
    //~ const UPDATE_TYPE_CREATE = 'create';
    //~ const UPDATE_TYPE_UPDATE = 'update';
    //~ const UPDATE_TYPE_DELETE = 'delete';
//~ 
    //~ const SCENARIO_BATCH_UPDATE = 'batchUpdate';
//~ 
//~ 
    //~ private $_updateType;
//~ 
    //~ public function getUpdateType()
    //~ {
        //~ if (empty($this->_updateType)) {
            //~ if ($this->isNewRecord) {
                //~ $this->_updateType = self::UPDATE_TYPE_CREATE;
            //~ } else {
                //~ $this->_updateType = self::UPDATE_TYPE_UPDATE;
            //~ }
        //~ }
//~ 
        //~ return $this->_updateType;
    //~ }
//~ 
    //~ public function setUpdateType($value)
    //~ 
    //~ {
        //~ $this->_updateType = $value;
    //~ }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%student_application_course}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			//~ ['updateType', 'required', 'on' => self::SCENARIO_BATCH_UPDATE],
            //~ ['updateType',
                //~ 'in',
                //~ 'range' => [self::UPDATE_TYPE_CREATE, self::UPDATE_TYPE_UPDATE, self::UPDATE_TYPE_DELETE],
                //~ 'on' => self::SCENARIO_BATCH_UPDATE]
            //~ ,
            //~ //['course_id', 'attendance_type_id', 'application_status', 'required'],
            //~ //allowing it to be empty because it will be filled by the ReceiptController
            //['student_application_id', 'required', 'except' => self::SCENARIO_BATCH_UPDATE],
            //~ 
            [['student_application_id', 'course_id', 'attendance_type_id', 'application_status'], 'required'],
            [['student_application_id', 'course_id', 'attendance_type_id'], 'integer'],
            [['application_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
   public function attributeLabels()
    {
        return [
            'student_application_course_id' => 'Student Application Course ID',
            'student_application_id' => 'Application ID',
            'course_id' => 'Course ID',
            'attendance_type_id' => 'Attendance Type ID',
            'application_status' => 'Application Status',
        ];
    }
    
    public function getAttendanceTypes() { // could be a static func as well
        $models = AttendanceType::find()->asArray()->all();
        return ArrayHelper::map($models, 'attendance_type_id', 'attendance_type');
    }
    
    public function getApplications() { // could be a static func as well
        $models = StudentApplication::find()->asArray()->all();
         return ArrayHelper::map($models, 'student_application_id', 'student_application_id');
    }
    
    public function getCourses() { // could be a static func as well
        $models = Course::find()->asArray()->all();
         return ArrayHelper::map($models, 'course_id', 'course');
    }
    
    public function getAdmissions()
    {
        return $this->hasOne(Admissions::className(), ['admission_id' => 'admission_id']);
    }
}
