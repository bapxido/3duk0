<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffMemberQualifications;

/**
 * StaffMemberQualificationsSearch represents the model behind the search form about `app\models\StaffMemberQualifications`.
 */
class StaffMemberQualificationsSearch extends StaffMemberQualifications
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_member_qualification_id', 'qualification_id', 'staff_member', 'create_user_id', 'update_user_id'], 'integer'],
            [['qualification', 'qualification', 'institution', 'training_start_date', 'training_end_date', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
        ];
    }
    
    public function attributes()
	{
		// add related fields to searchable attributes
		return array_merge(parent::attributes(), ['qualification.qualification']);
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
        $query = StaffMemberQualifications::find();

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
            'staff_member_qualification_id' => $this->staff_member_qualification_id,
            'staff_member_id' => $this->staff_member_id,
            'training_start_date' => $this->training_start_date,
            'training_end_date' => $this->training_end_date,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'qualification', $this->qualification])
            ->andFilterWhere(['like', 'institution', $this->institution])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
