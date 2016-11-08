<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassSubjectHeader;

/**
 * ClassSubjectHeaderSearch represents the model behind the search form about `app\models\ClassSubjectHeader`.
 */
class ClassSubjectHeaderSearch extends ClassSubjectHeader
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_header_id', 'staff_member_id', 'subject_id', 'academic_period_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['class_subject_name', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = ClassSubjectHeader::find();

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
            'class_subject_header_id' => $this->class_subject_header_id,
            'staff_member_id' => $this->staff_member_id,
            'subject_id' => $this->subject_id,
            'academic_period_id' => $this->academic_period_id,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'class_subject_name', $this->class_subject_name])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
