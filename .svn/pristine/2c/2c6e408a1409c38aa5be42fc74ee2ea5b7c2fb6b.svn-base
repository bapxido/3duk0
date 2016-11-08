<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_day".
 *
 * @property integer $academic_day_id
 * @property integer $academic_period_id
 * @property string $day_date
 * @property integer $week_number
 * @property integer $day_type_id
 * @property string $remarks
 * @property string $record_status
 *
 * @property AcademicPeriod $academicPeriod
 * @property DayType $dayType
 * @property AttendanceGeneral[] $attendanceGenerals
 */
class AcademicDay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_day';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_period_id', 'day_date'], 'required'],
            [['academic_period_id', 'week_number', 'day_type_id'], 'integer'],
            [['day_date'], 'safe'],
            [['remarks', 'record_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'academic_day_id' => 'Academic Day ID',
            'academic_period_id' => 'Academic Period ID',
            'day_date' => 'Day Date',
            'week_number' => 'Week Number',
            'day_type_id' => 'Day Type ID',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPeriod()
    {
        return $this->hasOne(AcademicPeriod::className(), ['academic_period_id' => 'academic_period_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDayType()
    {
        return $this->hasOne(DayType::className(), ['day_type_id' => 'day_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendanceGenerals()
    {
        return $this->hasMany(AttendanceGeneral::className(), ['academic_day_id' => 'academic_day_id']);
    }
}
