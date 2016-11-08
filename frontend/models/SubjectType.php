<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_type".
 *
 * @property integer $subject_type_id
 * @property string $subject_type
 * @property string $remarks
 * @property string $record_status
 */
class SubjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_type', 'record_status'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['subject_type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_type_id' => 'Subject Type ID',
            'subject_type' => 'Subject Type',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }
}
