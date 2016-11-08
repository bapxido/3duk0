<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%attendance_type}}".
 *
 * @property integer $attendance_type_id
 * @property string $attendance_type
 */
class AttendanceType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attendance_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendance_type'], 'required'],
            [['attendance_type'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attendance_type_id' => 'Attendance Type ID',
            'attendance_type' => 'Attendance Type',
        ];
    }
}
