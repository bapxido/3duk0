<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_student_subject_class_roll".
 *
 * @property integer $class_subject_enrolment_id
 * @property integer $class_subject_header_id
 * @property string $enrolment_date
 * @property integer $student_course_id
 * @property integer $course_id
 * @property string $course
 * @property integer $student_id
 * @property string $fullname
 */
class ViewStudentSubjectClassRoll extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_student_subject_class_roll';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_enrolment_id', 'class_subject_header_id', 'student_course_id', 'course_id', 'student_id'], 'integer'],
            [['class_subject_header_id', 'enrolment_date', 'course_id', 'course'], 'required'],
            [['enrolment_date'], 'safe'],
            [['course'], 'string', 'max' => 250],
            [['fullname'], 'string', 'max' => 152]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_subject_enrolment_id' => 'Class Subject Enrolment ID',
            'class_subject_header_id' => 'Class Subject Header ID',
            'enrolment_date' => 'Enrolment Date',
            'student_course_id' => 'Student Course ID',
            'course_id' => 'Course ID',
            'course' => 'Course',
            'student_id' => 'Student ID',
            'fullname' => 'Fullname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubjectHeader()
    {
        return $this->hasOne(ClassSubjectHeader::className(), ['class_subject_header_id' => 'class_subject_header_id']);
    }
}
