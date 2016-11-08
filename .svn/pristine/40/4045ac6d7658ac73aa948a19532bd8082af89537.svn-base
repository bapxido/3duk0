<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_title".
 *
 * @property integer $staff_title_id
 * @property string $staff_title
 * @property string $remarks
 * @property string $record_status
 */
class StaffTitle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_title'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['staff_title'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_title_id' => 'Staff Title ID',
            'staff_title' => 'Staff Title',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }
}
