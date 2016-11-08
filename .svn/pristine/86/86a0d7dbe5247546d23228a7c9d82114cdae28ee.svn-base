<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bulletin;

/**
 * BulletinSearch represents the model behind the search form about `app\models\Bulletin`.
 */
class BulletinSearch extends Bulletin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bulletin_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['subject', 'bulletin', 'record_status', 'create_date', 'update_date'], 'safe'],
            [['userName'], 'safe']
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
        $query = Bulletin::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        /**
		 * Setup your sorting attributes
		 * Note: This is setup before the $this->load($params) 
		 * statement below
		 */
		 $dataProvider->setSort([
			'attributes' => [
				'id',
				'userName' => [
					'asc' => ['tbl_user.userName' => SORT_ASC],
					'desc' => ['tbl_user.userName' => SORT_DESC],
					'label' => 'User Name'
				]
			]
		]);
	 
		if (!($this->load($params) && $this->validate())) {
			/**
			 * The following line will allow eager loading with country data 
			 * to enable sorting by country on initial loading of the grid.
			 */ 
			$query->joinWith(['user']);
			return $dataProvider;
		}

        //~ //$this->load($params);
//~ 
        //~ if (!$this->validate()) {
            //~ // uncomment the following line if you do not want to return any records when validation fails
            //~ // $query->where('0=1');
            //~ return $dataProvider;
        //~ }

        $query->andFilterWhere([
            'bulletin_id' => $this->bulletin_id,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'bulletin', $this->bulletin])
            ->andFilterWhere(['record_status'=> "Active"])
            //->andFilterWhere('create_date' >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH));
            ->andFilterWhere(['BETWEEN', 'create_date',
                new \yii\db\Expression('(NOW() - INTERVAL 1 MONTH)'),
                new \yii\db\Expression('NOW()')
            ]);
            
        // filter by user name
		$query->andWhere('username LIKE "%' . $this->userName . '%" ' .
			'OR last_name LIKE "%' . $this->userName . '%"'
		);
	 
		// filter by country name
		$query->joinWith(['user' => function ($q) {
			$q->where('tbl_user.user_name LIKE "%' . $this->countryName . '%"');
		}]);
 

        return $dataProvider;
    }
}
