<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class_subject_assignment".
 *
 * @property integer $assignment_id
 * @property integer $class_subject_header_id
 * @property string $assignment_title
 * @property string $assignment_issue_date
 * @property integer $assignment_due_date
 * @property string $assignment_document
 * @property string $remarks
 * @property string $record_status
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_id
 *
 * @property ClassSubjectHeader $classSubjectHeader
 */
class ClassSubjectAssignment extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_subject_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_header_id', 'assignment_title', 'assignment_document', 'create_date', 'create_user_id'], 'required'],
            [['class_subject_header_id', 'create_user_id', 'update_id'], 'integer'],
            [['assignment_issue_date', 'assignment_due_date', 'create_date', 'update_date'], 'safe'],
            [['remarks', 'record_status'], 'string'],
            [['file'], 'file'],
            [['assignment_title', 'assignment_document'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'assignment_id' => 'Assignment ID',
            'class_subject_header_id' => 'Class Subject Header ID',
            'assignment_title' => 'Assignment Title',
            'assignment_issue_date' => 'Assignment Issue Date',
            'assignment_due_date' => 'Assignment Due Date',
            'assignment_document' => 'Assignment Document',
            'file' => 'Assignment File',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_date' => 'Create Date',
            'create_user_id' => 'Create User ID',
            'update_date' => 'Update Date',
            'update_id' => 'Update ID',
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
