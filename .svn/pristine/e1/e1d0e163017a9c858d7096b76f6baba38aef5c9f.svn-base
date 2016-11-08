<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_type".
 *
 * @property integer $staff_type_id
 * @property string $staff_type
 * @property string $remarks
 * @property string $record_status
 *
 * @property StaffMember[] $staffMembers
 */
class StaffType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_type'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['staff_type'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_type_id' => 'Staff Type ID',
            'staff_type' => 'Staff Type',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMembers()
    {
        return $this->hasMany(StaffMember::className(), ['staff_type_id' => 'staff_type_id']);
    }
}
