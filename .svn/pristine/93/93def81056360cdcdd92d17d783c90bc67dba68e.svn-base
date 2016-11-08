<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nationality".
 *
 * @property integer $nationality_id
 * @property string $nationality
 * @property string $remarks
 * @property string $record_status
 *
 * @property StaffMember[] $staffMembers
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nationality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nationality'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['nationality'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nationality_id' => 'Nationality ID',
            'nationality' => 'Nationality',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMembers()
    {
        return $this->hasMany(StaffMember::className(), ['nationality_id' => 'nationality_id']);
    }
}
