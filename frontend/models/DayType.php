<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "day_type".
 *
 * @property integer $day_type_id
 * @property string $day_type
 * @property string $remarks
 * @property string $record_status
 */
class DayType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'day_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day_type'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['day_type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'day_type_id' => 'Day Type ID',
            'day_type' => 'Day Type',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }
}
