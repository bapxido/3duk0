<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentAdmission;

/**
 * StudentAdmissionSearch represents the model behind the search form about `app\models\StudentAdmission`.
 */
class StudentAdmissionSearch extends StudentAdmission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_admission_id', 'academic_period_id', 'create_user_id', 'update_user_id', 'update_date'], 'integer'],
            [['admission_date', 'create_date', 'record_status'], 'safe'],
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
        $query = StudentAdmission::find();

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
            'student_admission_id' => $this->student_admission_id,
            'admission_date' => $this->admission_date,
            'academic_period_id' => $this->academic_period_id,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
