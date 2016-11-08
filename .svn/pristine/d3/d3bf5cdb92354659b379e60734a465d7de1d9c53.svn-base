<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffMemberContacts;

/**
 * StaffMemberContactsSearch represents the model behind the search form about `app\models\StaffMemberContacts`.
 */
class StaffMemberContactsSearch extends StaffMemberContacts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_member_contact_id', 'staff_member_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['postal_address', 'physical_address', 'town_village', 'country', 'telephone', 'mobile', 'email', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = StaffMemberContacts::find();

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
            'staff_member_contact_id' => $this->staff_member_contact_id,
            'staff_member_id' => $this->staff_member_id,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'postal_address', $this->postal_address])
            ->andFilterWhere(['like', 'physical_address', $this->physical_address])
            ->andFilterWhere(['like', 'town_village', $this->town_village])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
