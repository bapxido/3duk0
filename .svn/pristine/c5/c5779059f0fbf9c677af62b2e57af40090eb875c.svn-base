<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_exam_marks".
 *
 * @property integer $test_exam_mark_id
 * @property integer $class_test_id
 * @property integer $student_id
 * @property string $marks_obtained
 * @property string $maximum_score
 * @property string $percentage
 * @property string $remarks
 * @property string $record_status
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_user_id
 *
 * @property Student $student
 * @property ClassTest $classTest
 */
class TestExamMarks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_exam_marks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_exam_mark_id', 'class_test_id', 'student_id', 'create_date', 'create_user_id'], 'required'],
            [['test_exam_mark_id', 'class_test_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['maximum_score', 'percentage'], 'number'],
            [['marks_obtained',], 'number', 'min'=>0, 'max'=>200],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test_exam_mark_id' => 'Test Exam Mark ID',
            'class_test_id' => 'Class Test ID',
            'student_id' => 'Student ID',
            'marks_obtained' => 'Marks Obtained',
            'maximum_score' => 'Maximum Score',
            'percentage' => 'Percentage',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_date' => 'Create Date',
            'create_user_id' => 'Create User ID',
            'update_date' => 'Update Date',
            'update_user_id' => 'Update User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassTest()
    {
        return $this->hasOne(ClassTest::className(), ['class_test_id' => 'class_test_id']);
    }
}
