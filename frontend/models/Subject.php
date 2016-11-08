<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "subject".
 *
 * @property integer $subject_id
 * @property integer $course_id
 * @property string $subject
 * @property string $subject_code
 * @property integer $subject_type_id
 * @property integer $credits
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property ClassSubjectHeader[] $classSubjectHeaders
 * @property Course $course
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'subject', 'create_user_id', 'create_date'], 'required'],
            [['course_id', 'subject_type_id', 'credits', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['subject'], 'string', 'max' => 250],
            [['subject_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'course_id' => 'Course',
            'subject' => 'Subject',
            'subject_code' => 'Subject Code',
            'subject_type_id' => 'Subject Type',
            'credits' => 'Credits',
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
    public function getClassSubjectHeaders()
    {
        return $this->hasMany(ClassSubjectHeader::className(), ['subject_id' => 'subject_id']);
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
    public function getSubjectType()
    {
        return $this->hasOne(SubjectType::className(), ['subject_type_id' => 'subject_type_id']);
    }
    
    // Get subject_type
    public function getSubjectTypes() { // could be a static func as well
        $models = SubjectType::find()->asArray()->all();
        return ArrayHelper::map($models, 'subject_type_id', 'subject_type');
    }
}
