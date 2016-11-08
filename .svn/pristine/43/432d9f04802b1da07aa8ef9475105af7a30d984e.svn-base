<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AttendanceGeneral;

/**
 * AttendanceGeneralSearch represents the model behind the search form about `app\models\AttendanceGeneral`.
 */
class AttendanceGeneralSearch extends AttendanceGeneral
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendance_general_id', 'academic_day_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['attendance_status', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = AttendanceGeneral::find();

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
            'attendance_general_id' => $this->attendance_general_id,
            'academic_day_id' => $this->academic_day_id,
            'student_id' => $this->student_id,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'attendance_status', $this->attendance_status])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
