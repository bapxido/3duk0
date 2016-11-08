<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events_calendar".
 *
 * @property integer $event_id
 * @property string $event_title
 * @property string $start_date
 * @property string $end_date
 * @property string $venue
 * @property string $description
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 */
class EventsCalendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events_calendar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_title', 'start_date', 'description', 'record_status', 'create_user_id', 'create_date'], 'required'],
            [['start_date', 'end_date', 'start_time', 'end_time', 'create_date', 'update_date'], 'safe'],
            [['description', 'record_status'], 'string'],
            [['create_user_id', 'update_user_id'], 'integer'],
            [['event_title'], 'string', 'max' => 250],
            [['venue'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_title' => 'Event Title',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'venue' => 'Venue',
            'description' => 'Description',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
        ];
    }
}
