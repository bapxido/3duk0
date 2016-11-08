<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AttendanceType;

/**
 * AttendanceTypeSearch represents the model behind the search form about `app\models\AttendanceType`.
 */
class AttendanceTypeSearch extends AttendanceType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendance_type_id'], 'integer'],
            [['attendance_type'], 'safe'],
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
        $query = AttendanceType::find();

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
            'attendance_type_id' => $this->attendance_type_id,
        ]);

        $query->andFilterWhere(['like', 'attendance_type', $this->attendance_type]);

        return $dataProvider;
    }
}