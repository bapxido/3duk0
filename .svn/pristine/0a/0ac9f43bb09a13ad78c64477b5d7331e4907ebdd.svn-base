<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentApplication;

/**
 * StudentApplicationSearch represents the model behind the search form about `app\models\StudentApplication`.
 */
class StudentApplicationSearch extends StudentApplication
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_application_id', 'first_application', 'academic_period_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['application_date', 'application_status', 'create_date', 'update_date', 'record_status'], 'safe'],
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
        $query = StudentApplication::find();

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
            'student_application_id' => $this->student_application_id,
            'application_date' => $this->application_date,
            'first_application' => $this->first_application,
            'academic_period_id' => $this->academic_period_id,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'application_status', $this->application_status])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
