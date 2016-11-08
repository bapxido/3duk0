<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolFeesMaster;

/**
 * SchoolFeesMasterSearch represents the model behind the search form about `app\models\SchoolFeesMaster`.
 */
class SchoolFeesMasterSearch extends SchoolFeesMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees_id', 'academic_period_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['school_fees', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
            [['amount'], 'number'],
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
        $query = SchoolFeesMaster::find();

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
            'school_fees_id' => $this->school_fees_id,
            'academic_period_id' => $this->academic_period_id,
            'amount' => $this->amount,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'school_fees', $this->school_fees])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
