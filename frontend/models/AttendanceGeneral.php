<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "attendance_general".
 *
 * @property integer $attendance_general_id
 * @property integer $academic_day_id
 * @property integer $student_id
 * @property string $attendance_status
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property AcademicDay $academicDay
 * @property Student $student
 */
class AttendanceGeneral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendance_general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_day_id', 'student_id', 'record_status', 'create_user_id', 'create_date'], 'required'],
            [['academic_day_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['attendance_status', 'remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attendance_general_id' => 'Attendance General ID',
            'academic_day_id' => 'Academic Day',
            'student_id' => 'Student',
            'attendance_status' => 'Attendance Status',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
        ];
    }

    // public   function  beforeSave($insert)
    // {       
    //     $student_ids = implode(",", $this­->student_id);
    //     $this­->student_id = $student_ids;         
    //     return  parent::beforeSave($insert);
    // }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicDay()
    {
        return $this->hasOne(AcademicDay::className(), ['academic_day_id' => 'academic_day_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    // Get Academic Days
    public function getAcademicDays() { // could be a static func as well
        $models = AcademicDay::find()->asArray()->all();
        return ArrayHelper::map($models, 'academic_day_id', 'day_date');
    }

    // Get Academic Days
    public function getStudents() { // could be a static func as well
        $models = Student::find()->asArray()->all();
        return ArrayHelper::map($models, 'student_id', 'fullname');
    }
}
