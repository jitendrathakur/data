<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dailymarket;

/**
 * DailymarketSearch represents the model behind the search form about `app\models\Dailymarket`.
 */
class DailymarketSearch extends Dailymarket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state', 'district', 'market', 'commodity', 'variety', 'arrival_date'], 'safe'],
            [['min_price', 'max_price', 'modal_price'], 'number'],
            [['id'], 'integer'],
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
        $query = Dailymarket::find();

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
            'min_price' => $this->min_price,
            'max_price' => $this->max_price,
            'modal_price' => $this->modal_price,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'market', $this->market])
            ->andFilterWhere(['like', 'commodity', $this->commodity])
            ->andFilterWhere(['like', 'variety', $this->variety])
            ->andFilterWhere(['like', 'arrival_date', $this->arrival_date]);

        return $dataProvider;
    }
}
