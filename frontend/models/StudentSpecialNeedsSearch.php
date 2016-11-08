<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentSpecialNeeds;

/**
 * StudentSpecialNeedsSearch represents the model behind the search form about `app\models\StudentSpecialNeeds`.
 */
class StudentSpecialNeedsSearch extends StudentSpecialNeeds
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_special_need_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['special_need', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = StudentSpecialNeeds::find();

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
            'student_special_need_id' => $this->student_special_need_id,
            'student_id' => $this->student_id,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'special_need', $this->special_need])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
