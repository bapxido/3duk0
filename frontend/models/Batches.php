<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "batches".
 *
 * @property integer $batch_id
 * @property string $batch_name
 * @property integer $batch_course_id
 * @property string $batch_alias
 * @property string $start_date
 * @property string $end_date
 * @property string $create_user_id
 * @property string $create_date
 * @property string $update_date
 * @property integer $update_user_id
 * @property integer $record_status
 *
 * @property Batches $batchCourse
 * @property Batches[] $batches
 * @property StudentBatches[] $studentBatches
 */
class Batches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'batches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch_name', 'batch_course_id', 'batch_alias', 'start_date', 'end_date', 'create_user_id', 'create_date'], 'required'],
            [['batch_course_id', 'update_user_id', 'record_status'], 'integer'],
            [['start_date', 'end_date', 'create_user_id', 'create_date', 'update_date'], 'safe'],
            [['batch_name'], 'string', 'max' => 120],
            [['batch_alias'], 'string', 'max' => 35],
            [['batch_name', 'batch_course_id'], 'unique', 'targetAttribute' => ['batch_name', 'batch_course_id'], 'message' => 'The combination of Batch Name and Batch Course ID has already been taken.'],
            [['batch_alias'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'batch_id' => Yii::t('app', 'Batch ID'),
            'batch_name' => Yii::t('app', 'Batch Name'),
            'batch_course_id' => Yii::t('app', 'Batch Course ID'),
            'batch_alias' => Yii::t('app', 'Batch Alias'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'create_user_id' => Yii::t('app', 'Create User ID'),
            'create_date' => Yii::t('app', 'Create Date'),
            'update_date' => Yii::t('app', 'Update Date'),
            'update_user_id' => Yii::t('app', 'Update User ID'),
            'record_status' => Yii::t('app', 'Record Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatchCourse()
    {
        return $this->hasOne(Batches::className(), ['batch_course_id' => 'batch_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batches::className(), ['batch_course_id' => 'batch_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentBatches()
    {
        return $this->hasMany(StudentBatches::className(), ['batch_id' => 'batch_id']);
    }

    /**
     * @inheritdoc
     * @return BatchesSearch the active query used by this AR class.
     */
    //~ public static function find()
    //~ {
        //~ return new BatchesSearch(get_called_class());
    //~ }
}
