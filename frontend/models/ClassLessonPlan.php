<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class_lesson_plan".
 *
 * @property integer $lesson_plan_id
 * @property integer $class_subject_header_id
 * @property string $title
 * @property string $notes
 * @property string $lesson_date
 * @property string $end_date
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property ClassSubjectHeader $classSubjectHeader
 */
class ClassLessonPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_lesson_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_header_id', 'title', 'lesson_date', 'create_user_id', 'create_date'], 'required'],
            [['class_subject_header_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['notes'], 'string'],
            [['lesson_date', 'end_date', 'create_date', 'update_date'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lesson_plan_id' => 'Lesson Plan ID',
            'class_subject_header_id' => 'Class Subject Header ID',
            'title' => 'Title',
            'notes' => 'Notes',
            'lesson_date' => 'Lesson Date',
            'end_date' => 'End Date',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
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
