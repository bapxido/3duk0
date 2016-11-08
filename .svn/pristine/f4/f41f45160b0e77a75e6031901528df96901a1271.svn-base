<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course_type".
 *
 * @property integer $course_type_id
 * @property string $course_type
 * @property string $remarks
 * @property string $record_status
 *
 * @property Course[] $courses
 */
class CourseType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_type'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['course_type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_type_id' => 'Course Type ID',
            'course_type' => 'Course Type',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['course_type_id' => 'course_type_id']);
    }
}
