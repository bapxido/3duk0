<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Batches;

/**
 * BatchesSearch represents the model behind the search form about `app\models\Batches`.
 */
class BatchesSearch extends Batches
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch_id', 'batch_course_id', 'update_user_id', 'record_status'], 'integer'],
            [['batch_name', 'batch_alias', 'start_date', 'end_date', 'create_user_id', 'create_date', 'update_date'], 'safe'],
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
        $query = Batches::find();

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
            'batch_id' => $this->batch_id,
            'batch_course_id' => $this->batch_course_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'update_user_id' => $this->update_user_id,
            'record_status' => $this->record_status,
        ]);

        $query->andFilterWhere(['like', 'batch_name', $this->batch_name])
            ->andFilterWhere(['like', 'batch_alias', $this->batch_alias]);

        return $dataProvider;
    }
}
