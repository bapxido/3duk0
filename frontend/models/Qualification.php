<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qualification".
 *
 * @property integer $qualification_id
 * @property string $qualification
 * @property string $remarks
 * @property string $record_status
 *
 * @property StaffMemberQualifications[] $staffMemberQualifications
 */
class Qualification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qualification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qualification'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['qualification'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qualification_id' => 'Qualification ID',
            'qualification' => 'Qualification',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMemberQualifications()
    {
        return $this->hasMany(StaffMemberQualifications::className(), ['qualification_id' => 'qualification_id']);
    }
}
