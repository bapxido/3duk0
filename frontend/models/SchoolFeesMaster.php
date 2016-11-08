<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "school_fees_master".
 *
 * @property integer $school_fees_id
 * @property string $school_fees
 * @property integer $academic_period_id
 * @property string $amount
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property AcademicPeriod $academicPeriod
 * @property SchoolFeesStudentBill[] $schoolFeesStudentBills
 */
class SchoolFeesMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_fees_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees', 'academic_period_id', 'create_user_id', 'create_date'], 'required'],
            [['academic_period_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['amount'], 'number'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['school_fees'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_fees_id' => 'School Fees ID',
            'school_fees' => 'School Fees',
            'academic_period_id' => 'Academic Period ID',
            'amount' => 'Amount',
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
    public function getAcademicPeriod()
    {
        return $this->hasOne(AcademicPeriod::className(), ['academic_period' => 'academic_period_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolFeesStudentBills()
    {
        return $this->hasMany(SchoolFeesStudentBill::className(), ['school_fees_id' => 'school_fees_id']);
    }

    public function getAcademicPeriods()
    {
        // return $this->hasOne(AcademicDay::className(), ['academic_period' => 'academic_period_id']);
        $models = AcademicPeriod::find()->asArray()->all();
        return ArrayHelper::map($models, 'academic_period_id', 'academic_period');
    }
}
