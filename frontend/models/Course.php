<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "course".
 *
 * @property integer $course_id
 * @property integer $faculty_id
 * @property string $course
 * @property string $course_code
 * @property integer $course_type_id
 * @property string $course_duration
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property CourseType $courseType
 * @property Faculty $faculty
 * @property Subject[] $subjects
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faculty_id', 'course', 'create_user_id', 'create_date'], 'required'],
            [['faculty_id', 'course_type_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['course'], 'string', 'max' => 250],
            [['course_code', 'course_duration'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'faculty_id' => 'Faculty',
            'course' => 'Course',
            'course_code' => 'Course Code',
            'course_type_id' => 'Course Type',
            'course_duration' => 'Course Duration',
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
    public function getCourseType()
    {
        return $this->hasOne(CourseType::className(), ['course_type_id' => 'course_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['faculty_id' => 'faculty_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['course_id' => 'course_id']);
    }
    
    // Get faculties
    public function getFaculties() { // could be a static func as well
        $models = Faculty::find()->asArray()->all();
        return ArrayHelper::map($models, 'faculty_id', 'faculty');
    }
    
    // Get course types
    public function getCourseTypes() { // could be a static func as well
        $models = CourseType::find()->asArray()->all();
        return ArrayHelper::map($models, 'course_type_id', 'course_type');
    }

}
