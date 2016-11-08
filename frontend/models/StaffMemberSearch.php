<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffMember;

/**
 * StaffMemberSearch represents the model behind the search form about `app\models\StaffMember`.
 */
class StaffMemberSearch extends StaffMember
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_member_id', 'nationality_id', 'staff_type_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['title', 'first_name', 'middle_name', 'last_name', 'birth_date', 'birth_place', 'sex', 'national_id', 'passport_id', 'photo', 'fullname', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = StaffMember::find();

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
            'staff_member_id' => $this->staff_member_id,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->birth_place,
            'nationality_id' => $this->nationality_id,
            'staff_type_id' => $this->staff_type_id,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'national_id', $this->national_id])
            ->andFilterWhere(['like', 'passport_id', $this->passport_id])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
