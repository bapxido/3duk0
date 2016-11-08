<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_period".
 *
 * @property integer $academic_period_id
 * @property string $academic_period
 * @property string $start_date
 * @property string $end_date
 * @property string $remarks
 * @property string $record_status
 *
 * @property AcademicDay[] $academicDays 
 * @property ClassSubjectHeader[] $classSubjectHeaders
 * @property SchoolFeesMaster[] $schoolFeesMasters 
 */
class AcademicPeriod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_period';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_period', 'start_date', 'end_date'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['remarks', 'record_status'], 'string'],
            [['academic_period'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'academic_period_id' => 'Academic Period ID',
            'academic_period' => 'Academic Period',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicDays() 
    { 
        return $this->hasMany(AcademicDay::className(), ['academic_period_id' => 'academic_period_id']); 
    } 

   /** 
    * @return \yii\db\ActiveQuery 
    */ 
    public function getClassSubjectHeaders()
    {
        return $this->hasMany(ClassSubjectHeader::className(), ['academic_period_id' => 'academic_period_id']);
    }

   /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getSchoolFeesMasters() 
   { 
       return $this->hasMany(SchoolFeesMaster::className(), ['academic_period_id' => 'academic_period_id']); 
   } 
}
