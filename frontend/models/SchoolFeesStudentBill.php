<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "school_fees_student_bill".
 *
 * @property integer $school_fees_student_bill_id
 * @property integer $school_fees_id
 * @property integer $student_id
 * @property string $bill_date
 * @property string $bill_amount
 * @property string $paid_amount
 * @property string $balance
 * @property string $remarks
 * @property string $record_status
 *
 * @property SchoolFeesPayment[] $schoolFeesPayments
 * @property SchoolFeesMaster $schoolFees
 * @property Student $student
 */
class SchoolFeesStudentBill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_fees_student_bill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees_id', 'student_id', 'bill_date', 'bill_amount'], 'required'],
            [['school_fees_id', 'student_id'], 'integer'],
            [['bill_date'], 'safe'],
            [['bill_amount', 'paid_amount', 'balance'], 'number'],
            [['remarks', 'record_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_fees_student_bill_id' => 'School Fees Student Bill ID',
            'school_fees_id' => 'School Fees ID',
            'student_id' => 'Student ID',
            'bill_date' => 'Bill Date',
            'bill_amount' => 'Bill Amount',
            'paid_amount' => 'Paid Amount',
            'balance' => 'Balance',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolFeesPayments()
    {
        return $this->hasMany(SchoolFeesPayment::className(), ['school_fees_student_bill_id' => 'school_fees_student_bill_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolFees()
    {
        return $this->hasOne(SchoolFeesMaster::className(), ['school_fees_id' => 'school_fees_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }
}
