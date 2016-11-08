<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_batches".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $batch_id
 * @property string $create_date
 * @property string $update_date
 * @property integer $create_user_id
 * @property integer $update_user_id
 *
 * @property Student $student
 * @property Batches $batch
 */
class StudentBatches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_batches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'batch_id', 'create_date', 'create_user_id'], 'required'],
            [['student_id', 'batch_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['create_date', 'update_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'batch_id' => Yii::t('app', 'Batch ID'),
            'create_date' => Yii::t('app', 'Create Date'),
            'update_date' => Yii::t('app', 'Update Date'),
            'create_user_id' => Yii::t('app', 'Create User ID'),
            'update_user_id' => Yii::t('app', 'Update User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatch()
    {
        return $this->hasOne(Batches::className(), ['batch_id' => 'batch_id']);
    }

    /**
     * @inheritdoc
     * @return StudentBatchesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentBatchesQuery(get_called_class());
    }
}
