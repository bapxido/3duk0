<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NationalHolidays;

class NationalHolidaysSearch extends NationalHolidays
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['national_holiday_id', 'create_user_id', 'update_user_id', 'record_status'], 'integer'],
            [['national_holiday_name', 'national_holiday_date', 'national_holiday_remarks', 'create_date', 'update_date'], 'safe'],
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
        $query = NationalHolidays::find()->where(['record_status'=>0]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query, 'sort'=> ['defaultOrder' => ['national_holiday_id'=>SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'national_holiday_id' => $this->national_holiday_id,
            'national_holiday_date' => $this->dbDateSearch($this->national_holiday_date),
            'create_date' => $this->create_date,
            'create_user_id' => $this->create_user_id,
            'update_date' => $this->update_date,
            'update_user_id' => $this->update_user_id,
            'record_status' => $this->record_status,
        ]);

        $query->andFilterWhere(['like', 'national_holiday_name', $this->national_holiday_name])
            ->andFilterWhere(['like', 'national_holiday_remarks', $this->national_holiday_remarks]);

	unset($_SESSION['exportData']);
	$_SESSION['exportData'] = $dataProvider;

        return $dataProvider;
    }

    public static function getExportData() 
    {
	$data = [
			'data'=>$_SESSION['exportData'],
			'fileName'=>'National-Holidays-List', 
			'title'=>'National Holidays Report',
			'exportFile'=>'/national-holidays/NationalHolidaysExportPdfExcel',
		];

	return $data;
    }

    private function dbDateSearch($value)
    {
            if($value != "" && preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/', $value,$matches))
                return date("Y-m-d",strtotime($matches[0]));
            else
                return $value;
    }
}
