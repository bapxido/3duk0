<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_student_course".
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
 * @property string $fullname
 * @property string $course
 */
class ViewStudentCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_student_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_course_id', 'student_id', 'course_id', 'create_user_id', 'update_user_id', 'update_date'], 'integer'],
            [['student_id', 'course_id', 'enrolment_start_date', 'enrolment_end_date', 'create_user_id', 'create_date', 'course'], 'required'],
            [['enrolment_start_date', 'enrolment_end_date', 'create_date'], 'safe'],
            [['remarks', 'record_status'], 'string'],
            [['fullname'], 'string', 'max' => 152],
            [['course'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_course_id' => 'Student Course ID',
            'student_id' => 'Student ID',
            'course_id' => 'Course ID',
            'enrolment_start_date' => 'Enrolment Start Date',
            'enrolment_end_date' => 'Enrolment End Date',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
            'fullname' => 'Fullname',
            'course' => 'Course',
        ];
    }
}
