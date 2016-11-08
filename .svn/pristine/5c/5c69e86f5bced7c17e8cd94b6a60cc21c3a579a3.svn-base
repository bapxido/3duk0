<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentBatches;

/**
 * StudentBatchesSearch represents the model behind the search form about `app\models\StudentBatches`.
 */
class StudentBatchesSearch extends StudentBatches
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'batch_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
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
        $query = StudentBatches::find();

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
            'id' => $this->id,
            'student_id' => $this->student_id,
            'batch_id' => $this->batch_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
        ]);

        return $dataProvider;
    }
}
