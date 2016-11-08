<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EventsCalendar;

/**
 * EventsCalendarSearch represents the model behind the search form about `app\models\EventsCalendar`.
 */
class EventsCalendarSearch extends EventsCalendar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['event_title', 'start_date', 'end_date', 'venue', 'description', 'record_status', 'create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = EventsCalendar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'event_id' => $this->event_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'event_title', $this->event_title])
            ->andFilterWhere(['like', 'venue', $this->venue])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
