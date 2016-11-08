<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class_subject_notes".
 *
 * @property integer $class_subject_notes_id
 * @property integer $class_subject_header_id
 * @property string $topic
 * @property string $sub_topic
 * @property string $notes_document
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property ClassSubjectHeader $classSubjectHeader
 */
class ClassSubjectNotes extends \yii\db\ActiveRecord
{

    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_subject_notes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_header_id', 'topic', 'notes_document', 'record_status', 'create_user_id', 'create_date'], 'required'],
            [['class_subject_header_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['file'], 'file'],
            [['topic', 'sub_topic', 'notes_document'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_subject_notes_id' => 'Class Subject Notes',
            'class_subject_header_id' => 'Class Subject Header',
            'topic' => 'Topic',
            'sub_topic' => 'Sub Topic',
            'file' => 'Notes File',
            'notes_document' => 'Notes Document',
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
    public function getClassSubjectHeader()
    {
        return $this->hasOne(ClassSubjectHeader::className(), ['class_subject_header_id' => 'class_subject_header_id']);
    }

    // Get qualifications
    // public function getClassSubjectHeader() { // could be a static func as well
    //     $models = ClassSubjectHeader::find()->asArray()->all();
    //     return ArrayHelper::map($models, 'class_subject_header_id', 'class_subject_name');
    // }
}
