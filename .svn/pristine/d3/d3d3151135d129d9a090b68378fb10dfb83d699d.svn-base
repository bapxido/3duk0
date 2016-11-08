<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "student_course".
 *
 * @property integer $student_course_id
 * @property integer $student_id
 * @property integer $course_id
 * @property string $enrolment_start_date
 * @property string $enrolment_end_date
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property integer $update_date
 *
 * @property ClassSubjectRoll[] $classSubjectRolls
 * @property Course $course
 * @property Student $student
 */
class StudentCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'course_id', 'enrolment_start_date', 'enrolment_end_date', 'create_user_id', 'create_date'], 'required'],
            [['student_id', 'course_id', 'create_user_id', 'update_user_id', 'update_date'], 'integer'],
            [['enrolment_start_date', 'enrolment_end_date', 'create_date'], 'safe'],
            [['remarks', 'record_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_course_id' => 'Student Course ID',
            'student_id' => 'Student',
            'course_id' => 'Course',
            'enrolment_start_date' => 'Enrolment Start - End Date', // For date range label
            'enrolment_end_date' => 'Enrolment End Date',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubjectRolls()
    {
        return $this->hasMany(ClassSubjectRoll::className(), ['student_course_id' => 'student_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    // Get courses
    public function getCourses() { // could be a static func as well
        $models = Course::find()->asArray()->all();
        return ArrayHelper::map($models, 'course_id', 'course');
    }
    
    /**
     * @inheritdoc
     * @return StudentCourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentCourseQuery(get_called_class());
    }
}
