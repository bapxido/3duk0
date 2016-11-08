<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bulletin".
 *
 * @property integer $bulletin_id
 * @property string $subject
 * @property string $bulletin
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 */
class Bulletin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bulletin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'bulletin', 'record_status', 'create_user_id', 'create_date'], 'required'],
            [['bulletin', 'record_status'], 'string'],
            [['create_user_id', 'update_user_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['subject'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bulletin_id' => 'Bulletin ID',
            'subject' => 'Subject',
            'bulletin' => 'Bulletin',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
            /* Your other attribute labels */
			'userName' => Yii::t('app', 'User Name')
        ];
    }
    
    public function getBulletinText()
    {
        //return date('Y/m/d', $this->birthday);
        $text = $this->bulletin;
        
        if (strlen($text) > 100) {
			$trimstring = substr($text, 0, 100)."...";
		} else {
			$trimstring = $text."...";
		}
		return $trimstring; 
    }
    
    //~ public function getUsername()
    //~ {
        //~ $author = User::find()->where(['id'=>$this->create_user_id]);
        //~ 
		//~ return $author->username;
    //~ }
    
    /* ActiveRelation */
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'create_user_id']);
	}
	 
	/* Getter for country name */
	public function getUserName() {
		return $this->user->username;
	}
	 
    
    //~ public function setBulletinText($value)
    //~ {
        //~ $this->bulletin = $value;
    //~ }
}
