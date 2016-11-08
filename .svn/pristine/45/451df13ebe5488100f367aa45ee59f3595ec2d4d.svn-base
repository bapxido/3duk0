<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nationality;

/**
 * NationalitySearch represents the model behind the search form about `app\models\Nationality`.
 */
class NationalitySearch extends Nationality
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nationality_id'], 'integer'],
            [['nationality', 'remarks', 'record_status'], 'safe'],
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
        $query = Nationality::find();

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
            'nationality_id' => $this->nationality_id,
        ]);

        $query->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
